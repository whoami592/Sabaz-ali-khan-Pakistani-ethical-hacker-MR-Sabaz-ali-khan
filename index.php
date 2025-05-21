<?php
// Handle contact form submission
$msg = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $message = filter_input(INPUT_POST, 'message', FILTER_SANITIZE_STRING);
    
    if ($name && $email && $message) {
        // In a real application, you would send an email or save to a database
        $msg = "Thank you, $name! Your message has been received.";
    } else {
        $msg = "Please fill out all fields correctly.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sabaz Ali Khan - Pakistani Cyber Expert</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Courier New', Courier, monospace;
        }

        body {
            background: #0a0a0a;
            color: #0f0;
            overflow-x: hidden;
        }

        header {
            background: #111;
            padding: 20px;
            text-align: center;
            border-bottom: 2px solid #0f0;
        }

        header h1 {
            font-size: 2.5em;
            text-transform: uppercase;
            letter-spacing: 2px;
            animation: glitch 2s linear infinite;
        }

        nav {
            background: #222;
            padding: 10px;
            text-align: center;
        }

        nav a {
            color: #0f0;
            text-decoration: none;
            margin: 0 15px;
            font-size: 1.2em;
            transition: color 0.3s;
        }

        nav a:hover {
            color: #fff;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        section {
            margin: 40px 0;
            padding: 20px;
            background: #1a1a1a;
            border: 1px solid #0f0;
            border-radius: 5px;
        }

        section h2 {
            font-size: 1.8em;
            margin-bottom: 20px;
            color: #0ff;
        }

        .terminal {
            background: #000;
            padding: 20px;
            border-radius: 5px;
            border: 1px solid #0f0;
            white-space: pre-wrap;
            animation: typing 3s steps(30, end);
        }

        .services-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
        }

        .service-card {
            background: #222;
            padding: 15px;
            border: 1px solid #0f0;
            border-radius: 5px;
            text-align: center;
        }

        .service-card h3 {
            color: #0ff;
            margin-bottom: 10px;
        }

        form {
            display: flex;
            flex-direction: column;
            gap: 15px;
            max-width: 500px;
            margin: 0 auto;
        }

        input, textarea {
            background: #111;
            border: 1px solid #0f0;
            color: #0f0;
            padding: 10px;
            border-radius: 5px;
            font-family: 'Courier New', Courier, monospace;
        }

        button {
            background: #0f0;
            color: #000;
            border: none;
            padding: 10px;
            cursor: pointer;
            font-size: 1.1em;
            border-radius: 5px;
            transition: background 0.3s;
        }

        button:hover {
            background: #0ff;
        }

        .message {
            color: #ff0;
            text-align: center;
            margin-bottom: 20px;
        }

        footer {
            text-align: center;
            padding: 20px;
            background: #111;
            border-top: 2px solid #0f0;
            margin-top: 40px;
        }

        @keyframes glitch {
            2%, 64% {
                transform: translate(2px, 0);
            }
            4%, 60% {
                transform: translate(-2px, 0);
            }
            62% {
                transform: translate(0, 0);
            }
        }

        @keyframes typing {
            from { width: 0; }
            to { width: 100%; }
        }

        @media (max-width: 768px) {
            header h1 {
                font-size: 1.8em;
            }

            nav a {
                display: block;
                margin: 10px 0;
            }

            .container {
                padding: 10px;
            }
        }
    </style>
</head>
<body>
    <header>
        <h1>Sabaz Ali Khan - Cyber Expert</h1>
    </header>
    <nav>
        <a href="#home">Home</a>
        <a href="#about">About</a>
        <a href="#services">Services</a>
        <a href="#contact">Contact</a>
    </nav>
    <div class="container">
        <section id="home">
            <h2>Welcome to My Cyber Hub</h2>
            <div class="terminal">
                $ whoami
                Sabaz Ali Khan - Pakistani Ethical Hacker & Cybersecurity Expert
                $ expertise
                Penetration Testing | Vulnerability Assessment | Cyber Defense
                $ mission
                Securing the digital world, one system at a time.
            </div>
        </section>
        <section id="about">
            <h2>About Me</h2>
            <p>I am Sabaz Ali Khan, a dedicated ethical hacker from Pakistan with a passion for cybersecurity. With years of experience in identifying system vulnerabilities, I help organizations stay secure in an ever-evolving digital landscape. My expertise includes penetration testing, network security, and educating others about cyber threats.</p>
        </section>
        <section id="services">
            <h2>Services</h2>
            <div class="services-grid">
                <div class="service-card">
                    <h3>Penetration Testing</h3>
                    <p>Simulate real-world attacks to identify and fix vulnerabilities in your systems.</p>
                </div>
                <div class="service-card">
                    <h3>Vulnerability Assessment</h3>
                    <p>Comprehensive analysis to detect weaknesses in your network and applications.</p>
                </div>
                <div class="service-card">
                    <h3>Cybersecurity Training</h3>
                    <p>Educate your team on best practices to prevent cyber threats.</p>
                </div>
                <div class="service-card">
                    <h3>Incident Response</h3>
                    <p>Rapid response and recovery from cyber incidents to minimize damage.</p>
                </div>
            </div>
        </section>
        <section id="contact">
            <h2>Contact Me</h2>
            <?php if ($msg): ?>
                <p class="message"><?php echo htmlspecialchars($msg); ?></p>
            <?php endif; ?>
            <form method="POST">
                <input type="text" name="name" placeholder="Your Name" required>
                <input type="email" name="email" placeholder="Your Email" required>
                <textarea name="message" placeholder="Your Message" rows="5" required></textarea>
                <button type="submit">Send Message</button>
            </form>
        </section>
    </div>
    <footer>
        <p>Coded by Mr. Sabaz Ali Khan &copy; <?php echo date('Y'); ?></p>
    </footer>
</body>
</html>