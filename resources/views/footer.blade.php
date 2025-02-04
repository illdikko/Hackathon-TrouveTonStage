<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- footer.blade.php -->
    <footer id="footer">
        <div id="footer-container">
            <div id="footer-contact">
                <h5>Contact</h5>
                <ul id="footer-contact-list">
                    <li><a href="mailto:info@efp.be">Email: info@efp.be</a></li>
                    <li><a href="tel:+efp">Téléphone: +efp</a></li>
                </ul>
            </div>
            <div id="footer-developers">
                <h5>Développeurs</h5>
                <ul id="footer-developers-list">
                    <li>Amelien Sampaix</li>
                    <li>Coline Ducourtieux</li>
                    <li>Rabdeep Singh</li>
                    <li>...</li>
                    <li>...</li>
                </ul>
            </div>
            <div id="footer-designers">
                <h5>Graphistes</h5>
                <ul id="footer-designers-list">
                    <li>...</li>
                    <li>...</li>
                    <li>...</li>
                    <li>...</li>
                    <li>...</li>
                    <li>...</li>
                    <li>...</li>
                </ul>
            </div>
        </div>
        <div id="footer-bottom">
            <small>&copy; 2025 Groupe 10. Tous droits réservés.</small>
        </div>
    </footer>
    <style>
        #footer {
            background-color: white;
            color: black;
            padding: 20px 0;
            
        }
        #footer-container {
            display: flex;
            justify-content: space-between;
        }
        #footer-contact, #footer-developers, #footer-designers {
            flex: 1;
            margin: 0 10px;
        }
        #footer-contact h5, #footer-developers h5, #footer-designers h5 {
            margin-bottom: 10px;
        }
        #footer-contact-list, #footer-developers-list, #footer-designers-list {
            list-style: none;
            padding: 0;
           
        }
        #footer-contact-list li, #footer-developers-list li, #footer-designers-list li {
            margin-bottom: 10px;
        }
        #footer-contact-list a, #footer-developers-list a, #footer-designers-list a {
            color: #black;
            text-decoration: none;
        }
        #footer-contact-list a:hover, #footer-developers-list a:hover, #footer-designers-list a:hover {
            text-decoration: underline;
        }
        #footer-bottom {
            text-align: center;
            margin-top: 20px;
        }
    </style>

</body>
</html>
