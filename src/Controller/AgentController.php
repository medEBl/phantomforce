<?php

namespace App\Controller;

use App\Entity\Agent;
use App\Form\AgentType;
use App\Repository\AgentRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;

#[Route('/agent')]
final class AgentController extends AbstractController
{
    #[Route('', name: 'app_agent_index', methods: ['GET'])]
    public function index(Request $request, AgentRepository $agentRepository): Response
    {
        $q = $request->query->get('q');
        $sort = $request->query->get('sort', 'id');
        $dir = $request->query->get('dir', 'ASC');

        if (method_exists($agentRepository, 'searchAndSort')) {
            $agents = $agentRepository->searchAndSort($q, $sort, $dir);
        } else {
            $agents = $agentRepository->findAll();
        }

        return $this->render('agent/index.html.twig', [
            'agents' => $agents,
            'q' => $q,
            'sort' => $sort,
            'dir' => $dir,
        ]);
    }

    #[Route('/new', name: 'app_agent_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $agent = new Agent();

        $form = $this->createForm(AgentType::class, $agent);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($agent);
            $entityManager->flush();

            return $this->redirectToRoute('app_agent_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('agent/new.html.twig', [
            'agent' => $agent,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/{id}', name: 'app_agent_show', methods: ['GET'])]
    public function show(Agent $agent): Response
    {
        return $this->render('agent/show.html.twig', [
            'agent' => $agent,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_agent_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Agent $agent, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(AgentType::class, $agent);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_agent_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('agent/edit.html.twig', [
            'agent' => $agent,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/{id}', name: 'app_agent_delete', methods: ['POST'])]
    public function delete(Request $request, Agent $agent, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete' . $agent->getId(), $request->request->get('_token'))) {
            $entityManager->remove($agent);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_agent_index', [], Response::HTTP_SEE_OTHER);
    }
    #[Route('/export/excel', name: 'app_agent_export_excel', methods: ['GET'])]
    public function exportExcel(AgentRepository $agentRepository): Response
    {
        // 1. Fetch all agents from the database
        $agents = $agentRepository->findAll();

        // 2. Create a new Spreadsheet object
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();
        $sheet->setTitle('Agents Phantom Force');

        // 3. Set the column headers
        $sheet->setCellValue('A1', 'ID');
        $sheet->setCellValue('B1', 'Pseudo');
        $sheet->setCellValue('C1', 'Jeu');
        $sheet->setCellValue('D1', 'Statut');
        $sheet->setCellValue('E1', 'Rank');
        $sheet->setCellValue('F1', 'Lien Social');

        // Optional: Make the header row bold
        $sheet->getStyle('A1:F1')->getFont()->setBold(true);

        // 4. Fill in the data
        $row = 2; // Start on row 2 (row 1 is headers)
        foreach ($agents as $agent) {
            $sheet->setCellValue('A' . $row, $agent->getId());
            $sheet->setCellValue('B' . $row, $agent->getPseudo());
            $sheet->setCellValue('C' . $row, $agent->getGame());
            $sheet->setCellValue('D' . $row, ucfirst($agent->getStatus()));
            $sheet->setCellValue('E' . $row, $agent->getRank());
            $sheet->setCellValue('F' . $row, $agent->getSocialsLink() ?? 'Aucun');
            $row++;
        }

        // Auto-size the columns for a clean look
        foreach (range('A', 'F') as $columnID) {
            $sheet->getColumnDimension($columnID)->setAutoSize(true);
        }

        // 5. Create the Excel file and prepare the download response
        $writer = new Xlsx($spreadsheet);
        $fileName = 'Phantom_Force_Agents.xlsx';
        $temp_file = tempnam(sys_get_temp_dir(), $fileName);
        $writer->save($temp_file);

        return $this->file($temp_file, $fileName, ResponseHeaderBag::DISPOSITION_ATTACHMENT);
    }


}
