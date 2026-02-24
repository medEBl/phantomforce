# Save this as download-models-fixed.ps1
$weightsDir = "public\weights"
New-Item -ItemType Directory -Path $weightsDir -Force | Out-Null

$baseUrl = "https://raw.githubusercontent.com/justadudewhohacks/face-api.js/master/weights"

$files = @(
    "tiny_face_detector_model-weights_manifest.json",
    "tiny_face_detector_model-shard1",
    "face_landmark_68_model-weights_manifest.json",
    "face_landmark_68_model-shard1",
    "face_recognition_model-weights_manifest.json",
    "face_recognition_model-shard1",
    "face_recognition_model-shard2"
)

foreach ($file in $files) {
    Write-Host "Downloading $file..." -NoNewline
    try {
        Invoke-WebRequest -Uri "$baseUrl/$file" -OutFile "$weightsDir\$file" -ErrorAction Stop
        Write-Host " ✅" -ForegroundColor Green
    }
    catch {
        Write-Host " ❌" -ForegroundColor Red
        Write-Host "  Error: $_" -ForegroundColor Red
    }
}