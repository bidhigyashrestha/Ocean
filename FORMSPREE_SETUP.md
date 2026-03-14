# Formspree Setup Guide

## Why Formspree?
- Free form submissions (unlimited on free tier)
- Emails sent directly to your inbox
- No backend PHP needed
- Works perfectly with GitHub Pages

## Step 1: Create Formspree Account
1. Go to https://formspree.io/
2. Click "Sign Up"
3. Create account with your email
4. Verify email

## Step 2: Create New Form
1. Log in to Formspree dashboard
2. Click "Create a new form"
3. Give it a name: "Ocean Shrestha Coaching Applications"
4. Choose your email: shresthaocean351@gmail.com
5. Copy the **Form ID** (looks like: `mbjwjxza`)

## Step 3: Update startcoaching.html
Replace `YOUR_FORM_ID` in the form action with your actual Form ID:

```html
<!-- BEFORE -->
<form action="https://formspree.io/f/YOUR_FORM_ID" method="POST">

<!-- AFTER (example with Form ID) -->
<form action="https://formspree.io/f/mbjwjxza" method="POST">
```

## Step 4: Test Form
1. Open your website
2. Fill out the coaching application form
3. Click submit
4. You should receive email confirmation
5. Check your email (shresthaocean351@gmail.com) for the submission

## Step 5: Enable Email Notifications (Optional)
In Formspree Dashboard:
- Go to form settings
- Enable email notifications
- Choose how emails are formatted

## Customization Options

### Custom Redirect Page
After form submission, users are redirected. Current redirect is to home page:
```html
<input type="hidden" name="_redirect" value="https://yourdomain.com/">
```

Change to any page you want (e.g., thank you page):
```html
<input type="hidden" name="_redirect" value="https://yourdomain.com/thankyou.html">
```

### Success Message
Users see Formspree's default success page. To customize:
1. Create a `thankyou.html` file
2. Update the redirect value above to point to it

## Free Tier Limits
- Unlimited forms
- 50 submissions/month per form
- Email notifications for all submissions
- Spam protection included

If you exceed 50/month later, upgrade to Formspree's paid plan ($10/month)

## Deployment to GitHub Pages

### Step 1: Enable GitHub Pages
1. Go to your GitHub repository: https://github.com/bidhigyashrestha/Ocean
2. Go to Settings → Pages
3. Under "Source", select "Deploy from a branch"
4. Select branch: main
5. Select folder: / (root)
6. Click Save

### Step 2: Wait for Deployment
- GitHub will build your site
- Visit https://bidhigyashrestha.github.io/Ocean/
- Your site is now live!

### Step 3: Custom Domain (Optional)
1. Point your domain DNS to GitHub Pages
2. Add CNAME file (already exists in your repo)
3. Go to Settings → Pages → Custom Domain
4. Enter your domain name
5. Save

## Files Changed
- ✅ `startcoaching.html` - Updated to use Formspree instead of PHP
- ✅ Removed `submit.php` from deployment (no longer needed)
- ✅ All other files ready for GitHub Pages

## Push to GitHub
```bash
git add -A
git commit -m "Update form to use Formspree for GitHub Pages compatibility"
git push
```

## Support
- Formspree Help: https://formspree.io/help
- GitHub Pages Help: https://pages.github.com/
