<?php

session_start();

if (empty($_SESSION["mail_success"])) $_SESSION["mail_success"] = false;
if (empty($_SESSION["mail_error"])) $_SESSION["mail_error"] = false;

$success = $_SESSION["mail_success"];
$error = $_SESSION["mail_error"];

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>Send Mail | Contact</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Get in touch with us - Apple style contact form">
  
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  
  <!-- Tailwind CSS CDN -->
  <script src="https://cdn.tailwindcss.com"></script>
  
  <!-- Animate.css -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
  
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  
  <!-- Custom Styles -->
  <style>
    :root {
      --apple-black: #1d1d1f;
      --apple-gray: #86868b;
      --apple-light-gray: #f5f5f7;
      --apple-silver: #e8e8ed;
    }
    
    * {
      font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
    }
    
    body {
      background: linear-gradient(135deg, #f5f5f7 0%, #ffffff 100%);
      min-height: 100vh;
      margin: 0;
    }
    
    .apple-input {
      background: rgba(255, 255, 255, 0.8);
      border: 1px solid #d2d2d7;
      border-radius: 12px;
      transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    }
    
    .apple-input:focus {
      outline: none;
      border-color: #0071e3;
      box-shadow: 0 0 0 4px rgba(0, 113, 227, 0.1);
      background: white;
    }
    
    .apple-button {
      background: linear-gradient(135deg, #0071e3 0%, #0056b3 100%);
      transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    }
    
    .apple-button:hover {
      transform: translateY(-2px);
      box-shadow: 0 8px 25px rgba(0, 113, 227, 0.25);
    }
    
    .apple-button:active {
      transform: translateY(0);
    }
    
    .glass-effect {
      background: rgba(255, 255, 255, 0.7);
      backdrop-filter: blur(20px);
      -webkit-backdrop-filter: blur(20px);
      border: 1px solid rgba(255, 255, 255, 0.2);
    }
    
    .text-gradient {
      background: linear-gradient(135deg, #1d1d1f 0%, #424245 100%);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
    }
  </style>
</head>

<body class="flex items-center justify-center min-h-screen p-4">
  <div class="container max-w-6xl mx-auto">
    <div class="grid md:grid-cols-2 gap-12 items-center">
      <!-- Left Column - Graphics -->
      <div class="hidden md:block animate__animated animate__fadeInLeft">
        <div class="space-y-8">
          <div class="text-5xl font-bold text-gradient">
            Let's create something amazing together.
          </div>
          
          <div class="space-y-4">
            <div class="flex items-center space-x-3">
              <div class="w-10 h-10 rounded-full bg-gradient-to-r from-blue-500 to-cyan-400 flex items-center justify-center">
                <i class="fas fa-envelope text-white"></i>
              </div>
              <div>
                <div class="font-semibold text-gray-800">Quick Response</div>
                <div class="text-gray-600 text-sm">We reply within 24 hours</div>
              </div>
            </div>
            
            <div class="flex items-center space-x-3">
              <div class="w-10 h-10 rounded-full bg-gradient-to-r from-purple-500 to-pink-500 flex items-center justify-center">
                <i class="fas fa-shield-alt text-white"></i>
              </div>
              <div>
                <div class="font-semibold text-gray-800">Secure & Private</div>
                <div class="text-gray-600 text-sm">Your data is protected</div>
              </div>
            </div>
            
            <div class="flex items-center space-x-3">
              <div class="w-10 h-10 rounded-full bg-gradient-to-r from-green-500 to-emerald-400 flex items-center justify-center">
                <i class="fas fa-headset text-white"></i>
              </div>
              <div>
                <div class="font-semibold text-gray-800">24/7 Support</div>
                <div class="text-gray-600 text-sm">Always here to help</div>
              </div>
            </div>
          </div>
          
          <div class="glass-effect rounded-2xl p-6">
            <div class="text-gray-700 mb-4">"Nothing is Impossible"</div>
            <div class="flex items-center">
              <div class="w-8 h-8 rounded-full bg-gray-300 mr-3"></div>
              <div>
                <div class="font-medium text-gray-900">Mohamed Nousad</div>
                <div class="text-gray-600 text-sm">Software Engineer</div>
              </div>
            </div>
          </div>
        </div>
      </div>
      
      <!-- Right Column - Form -->
      <div class="animate__animated animate__fadeInRight">
        <div class="glass-effect rounded-3xl p-8 md:p-12 shadow-2xl">
          <div class="text-center mb-10">
            <h1 class="text-4xl font-bold text-gray-900 mb-3">Get in Touch</h1>
            <p class="text-gray-600">We'd love to hear from you. Send us a message and we'll respond as soon as possible.</p>
          </div>
          
          <form class="form-box space-y-6" method="POST" action="email.php">
            <!-- Name Field -->
            <div class="relative group">
              <label class="block text-sm font-medium text-gray-700 mb-2">Name</label>
              <div class="relative">
                <input 
                  type="text" 
                  name="name" 
                  required 
                  class="apple-input w-full px-4 py-3.5 text-gray-900 placeholder-gray-400 focus:placeholder-gray-300 transition-all"
                  placeholder="John Appleseed"
                >
                <div class="absolute right-3 top-1/2 transform -translate-y-1/2">
                  <i class="fas fa-user text-gray-400"></i>
                </div>
              </div>
            </div>
            
            <!-- Email Field -->
            <div class="relative group">
              <label class="block text-sm font-medium text-gray-700 mb-2">Email Address</label>
              <div class="relative">
                <input 
                  type="email" 
                  name="email" 
                  required 
                  class="apple-input w-full px-4 py-3.5 text-gray-900 placeholder-gray-400 focus:placeholder-gray-300 transition-all"
                  placeholder="john@example.com"
                >
                <div class="absolute right-3 top-1/2 transform -translate-y-1/2">
                  <i class="fas fa-envelope text-gray-400"></i>
                </div>
              </div>
            </div>
            
            <!-- Message Field -->
            <div class="relative group">
              <label class="block text-sm font-medium text-gray-700 mb-2">Your Message</label>
              <div class="relative">
                <textarea 
                  name="message" 
                  required 
                  rows="5"
                  class="apple-input w-full px-4 py-3.5 text-gray-900 placeholder-gray-400 focus:placeholder-gray-300 transition-all resize-none"
                  placeholder="Tell us about your project, ideas, or questions..."
                ></textarea>
                <div class="absolute right-3 top-4">
                  <i class="fas fa-pen text-gray-400"></i>
                </div>
              </div>
            </div>
            
            <!-- Submit Button -->
            <div class="pt-4">
              <button 
                type="submit" 
                class="apple-button w-full py-4 rounded-xl text-white font-semibold text-lg tracking-wide shadow-lg"
              >
                <span>Send Message</span>
                <i class="fas fa-paper-plane ml-2"></i>
              </button>
            </div>
            
            <!-- Message Display Area -->
            <div class="input-box w100 message">
              <?php include 'contact-message.php'; ?>
            </div>
          </form>
          
          <div class="mt-8 pt-8 border-t border-gray-200 text-center">
            <p class="text-gray-600 text-sm">
              <i class="fas fa-lock mr-2"></i>
              Your information is secure. We never share your data.
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <!-- Animation Scripts -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.1/anime.min.js"></script>
  <script>
    // Form field animations
    document.addEventListener('DOMContentLoaded', function() {
      const inputs = document.querySelectorAll('input, textarea');
      
      inputs.forEach(input => {
        input.addEventListener('focus', function() {
          this.parentElement.parentElement.classList.add('animate__pulse');
        });
        
        input.addEventListener('blur', function() {
          this.parentElement.parentElement.classList.remove('animate__pulse');
        });
      });
      
      // Button hover animation
      const button = document.querySelector('.apple-button');
      button.addEventListener('mouseenter', function() {
        anime({
          targets: this,
          scale: 1.02,
          duration: 200,
          easing: 'easeOutQuad'
        });
      });
      
      button.addEventListener('mouseleave', function() {
        anime({
          targets: this,
          scale: 1,
          duration: 200,
          easing: 'easeOutQuad'
        });
      });
      
      // Page load animation
      anime({
        targets: '.form-box div',
        translateY: [20, 0],
        opacity: [0, 1],
        delay: anime.stagger(100),
        easing: 'easeOutQuad'
      });
    });
  </script>
</body>

</html>