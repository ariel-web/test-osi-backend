<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');
    </style>
</head>
<body style="margin: 0; padding: 0; font-family: 'Poppins', Arial, sans-serif; min-height: 100vh; display: flex; align-items: center; justify-content: center;">

    <div style="max-width: 550px; margin: 20px; background: white; border-radius: 30px; box-shadow: 0 20px 60px rgba(0,0,0,0.3); overflow: hidden; animation: fadeIn 0.8s ease;">
        
        <div style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); padding: 40px 30px 60px; text-align: center; position: relative;">
            <div style="position: absolute; top: -20px; right: -20px; width: 120px; height: 120px; background: rgba(255,255,255,0.1); border-radius: 50%;"></div>
            <div style="position: absolute; bottom: -30px; left: -20px; width: 100px; height: 100px; background: rgba(255,255,255,0.1); border-radius: 50%;"></div>
            
            <div style="background: rgba(255,255,255,0.2); width: 90px; height: 90px; border-radius: 50%; margin: 0 auto 20px; display: flex; align-items: center; justify-content: center; border: 3px solid white;">
                <span style="font-size: 40px;">🎉</span>
            </div>
            
            <h1 style="color: white; font-size: 36px; margin: 0 0 10px; font-weight: 700; text-shadow: 2px 2px 4px rgba(0,0,0,0.2);">¡Bienvenido!</h1>
            <p style="color: rgba(255,255,255,0.9); font-size: 18px; margin: 0; font-weight: 300;">Nos alegra tenerte con nosotros</p>
        </div>

        <div style="padding: 40px 30px; text-align: center;">
            <div style="margin-bottom: 30px;">
                <p style="color: #666; font-size: 16px; margin: 0 0 10px;">Hola,</p>
                <h2 style="color: #333; font-size: 42px; margin: 0; font-weight: 700; background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text;">
                    {{ $name ?? 'Usuario' }}
                </h2>
                <div style="width: 80px; height: 4px; background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); margin: 20px auto; border-radius: 2px;"></div>
            </div>

            <div style="background: #f8f9ff; border-radius: 20px; padding: 25px; margin-bottom: 30px;">
                <p style="color: #555; font-size: 18px; line-height: 1.6; margin: 0; font-weight: 300;">
                    Gracias por formar parte de nuestra comunidad. Estamos emocionados de comenzar esta aventura contigo y esperamos que disfrutes cada momento.
                </p>
            </div>

            <a href="#" style="display: inline-block; background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: white; text-decoration: none; padding: 15px 40px; border-radius: 50px; font-size: 16px; font-weight: 500; box-shadow: 0 10px 20px rgba(102, 126, 234, 0.3); transition: transform 0.3s; margin-bottom: 20px;">
                Comenzar ahora →
            </a>

            <p style="color: #999; font-size: 14px; margin: 0;">
                Si tienes alguna pregunta, no dudes en contactarnos.
            </p>
        </div>

        <div style="background: #f5f5f5; padding: 20px; text-align: center; border-top: 1px solid #e0e0e0;">
            <p style="color: #888; font-size: 13px; margin: 0 0 5px;">© 2024 Tu Empresa. Todos los derechos reservados.</p>
            <p style="color: #999; font-size: 12px; margin: 0;">
                <a href="#" style="color: #667eea; text-decoration: none;">Términos</a> • 
                <a href="#" style="color: #667eea; text-decoration: none;">Privacidad</a> • 
                <a href="#" style="color: #667eea; text-decoration: none;">Contacto</a>
            </p>
        </div>
    </div>

    <style>
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
    </style>

</body>
</html>