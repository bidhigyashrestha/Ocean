# Deployment Instructions for Ocean Shrestha Fitness Website

## 1. Prepare Your Files
- Ensure all your website files (HTML, CSS, JS, PHP, images, etc.) are in a single folder.
- Your main entry point should be `index.html` or `home.html`.
- For the contact form to work, you must include `submit.php`.

## 2. Choose a Hosting Provider
- For PHP support, use a host like InfinityFree, 000WebHost, AwardSpace, ByetHost, or any paid host (Hostinger, Bluehost, etc.).
- Sign up and create a new website or hosting account.

## 3. Upload Your Files
- Use the host's file manager or an FTP client (like FileZilla) to upload all your files to the `htdocs` or `public_html` directory.
- Make sure to upload all HTML, CSS, JS, images, and PHP files.

## 4. Connect Your Domain
- In your hosting control panel, find your server's IP address or nameservers.
- Go to your domain registrar or Cloudflare DNS settings.
- Update your domain's A record to point to your host's IP, or set the nameservers to those provided by your host.
- Wait for DNS propagation (can take up to 24 hours).

## 5. Test Your Website
- Visit your domain in a browser.
- Check all pages, forms, and features.
- Test the contact/coaching form and check your email for submissions.

## 6. (Optional) Set Up Analytics
- Insert your analytics script (e.g., Google Analytics) in the `<head>` of each HTML file, using the placeholder provided.

## 7. (Optional) Enable HTTPS
- Use your host's SSL/TLS feature or Cloudflare's SSL to enable HTTPS for your domain.

## 8. Update and Maintain
- For future updates, edit your files locally, then re-upload changed files to your host.
- Use GitHub for version control and backup.

---

**Need help?**
- Check your host's documentation for file upload and DNS setup.
- Contact your host's support for technical issues.
- Ask me for step-by-step help with any part of this process!