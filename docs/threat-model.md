# STRIDE Threat Model — DVWA DevSecOps Project
| STRIDE Category | Threat | Likelihood/Impact | Mitigating Control |
|---|---|---|---|
| Tampering | SQL Injection via "User ID" field | High/High | Parameterized queries + intval()
(vulnerabilities/sqli/source/) |
| Execution of Arbitrary Code | Command Injection via "IP Address" field | High/High | Regex
IPv4 validation + escapeshellarg() (vulnerabilities/exec/source/) |
| Tampering | Stored XSS via guestbook message | Medium/High | Output encoding via
htmlspecialchars() (vulnerabilities/xss_s/source/) |
| Information Disclosure | Hardcoded DB credentials in config.inc.php | Medium/High |
Environment variables + GitHub Actions Secrets |
## Trust Boundaries
1. Internet → DVWA Web App (untrusted input boundary)
2. DVWA Web App → MariaDB (internal Docker bridge network, not exposed externally)
3. CI/CD Pipeline → Production (security gates block vulnerable code before deploy)
