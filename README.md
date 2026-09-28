# IE3142 DevSecOps Project: DVWA Pipeline

This repository contains the DevSecOps pipeline implementation for the Damn Vulnerable Web App (DVWA) as part of the IE3142 module.

## Architecture
The application consists of two communicating components containerized via Docker:
1. **DVWA Web Application**: PHP/Apache backend serving the vulnerable web interface.
2. **MariaDB Database**: Backend database storing application data.

## How to Run Locally
Ensure Docker and Docker Compose are installed on your machine.

1. Clone this repository:
   ```bash
   git clone https://github.com/IT24102453/IE3142-DevSecOps-Project-DVWA.git
   cd IE3142-DevSecOps-Project-DVWA
