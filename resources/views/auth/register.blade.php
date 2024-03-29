@extends('layouts.register')
<link rel="icon" type="image/png" href="/imagenes/logo2.png">

<div class="contenedor-register">

    <!--========================================
        Slider
    ==========================================-->
    <div class="contenedor-Slider">

        <div class="Slider">

            <!-- foto 1 -->
            <div class="Slide fade">
                <img src="/imagenes/cocina.png" alt="">

                <div class="contenido-Slider">

                    <div class="logo">
                        <img src="/imagenes/logo2.png" alt="">
                    </div>

                </div>

            </div>

            <!-- foto 2 -->
            <div class="Slide fade">
                <img src="/imagenes/libro.png" alt="">

                <div class="contenido-Slider">

                    <div class="logo">
                        <img src="/imagenes/logo2.png" alt="">
                    </div>


                </div>

            </div>


        </div>

        <!-- Botones  siguiente y anterior -->
        <a href="#" class="ante"><i class='bx bx-chevron-left'></i></i></a>
        <a href="#" class="siguiente"><i class='bx bx-chevron-right'></i></i></a>

        <!-- dots -->
        <div class="Dots">

            {{-- <span class="Dot Active"></span>  --}}
        </div>

    </div>

    <!--========================================
        Formularios
    ==========================================-->
    <div class="contenedor-texto">

        <div class="contenedor-form">

            <h1 class="titulo">¡Bienvenido a Recip-NL!</h1>
            <div class="eslogan">
                <h5 class="descripcion">Reparte Recetas Reparte Amor.</h5>
                <a class="google" href="https://accounts.google.com/AccountChooser/signinchooser?service=mail&continue=https%3A%2F%2Fmail.google.com%2Fmail%2F&flowName=GlifWebSignIn&flowEntry=AccountChooser"><img src="/imagenes/LGoogle.png" width="50" alt=""></a>
                <a href="#"><img src="/imagenes/Facebook.png" width="35" alt=""></a>
            </div>
            <!-- Tabs -->
            <ul class="tabs-links">
                <li class="tab-link active">Regístrate</li>
            </ul>

            <!--========================================
                Formulario de Registro
            ==========================================-->
            <form action="/register" method="POST" id="formRegistro" class="formulario active ">
                @csrf
                <div class="error-text">
                        
                </div>
                @include('layouts.partials.messages')

                <input type="text" placeholder="Nombres" class="input-text" name="names" autocomplete="off">
                <input type="text" placeholder="Apellidos" class="input-text" name="apellidos" autocomplete="off">
                <input type="email" placeholder="Correo electrónico" class="input-text" name="email" autocomplete="off">
                <select name="genero" id="" class="input-text">
                    <option value="Masculino">Masculino</option>
                    <option value="Femenino">Femenino</option>
                    <option value="Otro">Otro</option>
                </select>
                <input type="text" placeholder="Teléfono" class="input-text" name="telefono">
                <input type="date" placeholder="Fecha de nacimiento" class="input-text" name="fecha">

                <div class="grupo-input">

                    <input type="password" placeholder="Contraseña" name="password" class="input-text clave">

                    <button type="button" class="icono fas fa-eye mostrarClave"></button>

                </div>
                <div class="grupo-input">

                    <input type="password" placeholder="Confirmar Contraseña" name="password_confirmation" class="input-text clave">

                    <button type="button" class="icono fas fa-eye mostrarClave"></button>

                </div>

                <!-- Checkbox Personalizados -->
                <label class="contenedor-cbx animate">
                    Me gustaría recibir notificaciones sobre productos
                    <input type="checkbox" name="cbx_notificaciones" checked>
                    <span class="cbx-marca"></span>
                </label>

                <label class="contenedor-cbx animate">
                    He leído y acepto los
                    <a href="#" class="link">Términos y Condiciones</a>
                    ademas de
                    <a href="#" class="link"> Política de privacidad de la app</a>

                    <input type="checkbox" name="cbx_terminos">
                    <span class="cbx-marca"></span>

                </label>
                <a href="/login" class="link"><i class='bx bxs-shield-minus'></i>¿Ya tienes cuenta?</a>

                <button class="btn" id="btnRegistro" type="submit">Crear Cuenta</button>

            </form>


        </div>

    </div>

</div>

