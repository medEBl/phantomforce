<?php

// Create request
$request = Request::create('/forgot-password', 'POST', [
    'email' => 'test@example.com'
]);

// Create form
$form = new \Symfony\Component\Form\Form();
$form->add('email', \Symfony\Component\Form\Extension\Core\Type\EmailType::class);

// Simulate form submission
$form->handleRequest($request);

echo "Form submitted: " . ($form->isSubmitted() ? 'YES' : 'NO') . "\n";
echo "Form valid: " . ($form->isValid() ? 'YES' : 'NO') . "\n";

if ($form->isSubmitted() && $form->isValid()) {
    $email = $form->get('email')->getData();
    echo "Email extracted: " . $email . "\n";
}
