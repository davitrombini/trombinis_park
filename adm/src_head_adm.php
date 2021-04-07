<head>
    <!--
        Configuração do XAMPP - https://tonyfrenzy.medium.com/xampp-serving-from-any-directory-outside-of-htdocs-22a93f1b8815
    --> 

    <!-- meta -->
    <meta charset="UTF-8">  

    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <link rel="shortcut icon" href="../img/logo/favicon.ico" type="image/x-icon" />
    <title>Trombini's Park | Locação de Brinquedos</title>

    <!-- TODO add to home screen -->

    <!-- TODO scroll to top -->

    <!-- cookies 
        Funções para setar, pegar valor e apagar cookies
    -->
    <script>
        
        function setCookie(name,value,days) {
            var expires = "";
            if (days) {
                var date = new Date();
                date.setTime(date.getTime() + (days*24*60*60*1000));
                expires = "; expires=" + date.toUTCString();
            }
            document.cookie = name + "=" + (value || "")  + expires + "; path=/";
        }
        function getCookie(name) {
            var nameEQ = name + "=";
            var ca = document.cookie.split(';');
            for(var i=0;i < ca.length;i++) {
                var c = ca[i];
                while (c.charAt(0)==' ') c = c.substring(1,c.length);
                if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
            }
            return null;
        }
        function eraseCookie(name) {   
            document.cookie = name +'=; Path=/; Expires=Thu, 01 Jan 1970 00:00:01 GMT;';
        }
    </script>    
    <!-- cookies -->

    <!-- jQuery -->
    <script src = "../node_modules/jquery/dist/jquery.min.js"></script>

    <!-- Fomantic Ui -->
    <link rel="stylesheet" type="text/css" href="../semantic/dist/semantic.min.css">
    <script src="../semantic/dist/semantic.min.js"></script>

    <!-- General CSS -->
    <link rel="stylesheet" type="text/css" href="../src/css/main.css">
</head>