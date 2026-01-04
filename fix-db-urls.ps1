# fix-db-urls.ps1
Write-Host "Starting Database Service..."
docker compose up -d db

Write-Host "Waiting for Database to initialize..."
Start-Sleep -Seconds 15

Write-Host "Running WP-CLI Search & Replace (Localhost -> Production)..."
# We run a temporary wordpress:cli container
# It connects to the 'db' service in the 'fiqihplant_default' network
# It performs search-replace and outputs the results to stdout, which we save to init-db/dump.sql

$project = "fiqihplant"
$network = "${project}_default"

# Run the replacement and overwrite dump.sql
# We are NOT saving changes to the live local DB (we use --export), so local development remains localhost!
# --export prints the SQL dump to stdout *instead* of modifying the DB in place. 
# This is perfect: we generate a PROD dump from LOCAL db without breaking LOCAL db.

# We also handle 'localhost' (no port) just in case
docker run --rm --network $network `
    -e WORDPRESS_DB_HOST=db `
    -e WORDPRESS_DB_USER=root `
    -e WORDPRESS_DB_PASSWORD=root `
    -e WORDPRESS_DB_NAME=wordpress `
    wordpress:cli search-replace 'http://localhost:8000' 'https://fiqihplant.contraqs.cloud' 'http://localhost' 'https://fiqihplant.contraqs.cloud' --all-tables --export > init-db/dump.sql

Write-Host "New dump.sql generated."
Write-Host "Stopping Database..."
docker compose stop db

Write-Host "Done! You can now commit and push."
