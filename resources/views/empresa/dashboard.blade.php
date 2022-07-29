@extends('layout.index')

@section('content')
    
    <div class="main-dashboard">
        <div class="main-info">
            <div class="welcome">
                <div>
                    <h1>Hola, <b>Fundación Grupo Terra</b></h1>
                    <p>Bienvenido a Red Medicatel.<br>Agenda y ten toda la información médica de tu empresa.</p>
                    <button type="submit">Agendar</button>
                </div>
            </div>
            <div class="profile-info">
                <div class="top-profile">
                    <div class="img-profile">
                        <img src="img/logo-fundacion-terra.png" alt="Logo grupo terra">
                    </div>
                    <div>
                        <h1>Fundación Grupo Terra</h1>
                        <h5>correo@fundaciongrupoterra.com</h5>
                    </div>
                </div>
                <div class="info">
                    <div class="info-items">
                        <div class="data">
                            <i class="bi bi-hash"></i>
                            <p>RTN: </p>
                        </div>
                        <div class="detail">
                            0801-1900-0000000
                        </div>
                    </div>
                    <div class="info-items">
                        <div class="data">
                            <i class="bi bi-telephone"></i>
                            <p>Teléfono: </p>
                        </div>
                        <div class="detail">
                            (504) 2222-2222
                        </div>
                    </div>
                    <div class="info-items">
                        <div class="data">
                            <i class="bi bi-globe"></i>
                            <p>País: </p>
                        </div>
                        <div class="detail">
                            Honduras
                        </div>
                    </div>
                    <div class="info-items">
                        <div class="data">
                            <i class="bi bi-geo-alt"></i>
                            <p>Ciudad: </p>
                        </div>
                        <div class="detail">
                            Tegucigalpa
                        </div>
                    </div>
                </div>
            </div>
            <div class="stats">
                <div class="items-stats">
                    <div class="item-detail">
                        <i class="bi bi-people icons"></i>
                        <div>
                            <h1>123</h1>
                            <h4>Colaboradores</h4>
                        </div>
                    </div>
                    <div class="date">
                        <p>10 FEB. 2022</p>
                    </div>
                </div>
                <div class="items-stats">
                    <div class="item-detail">
                        <i class="bi bi-calendar3 icons"></i>
                        <div>
                            <h1>29</h1>
                            <h4>Citas Agendadas</h4>
                        </div>
                    </div>
                    <div class="date">
                        <p>10 FEB. 2022</p>
                    </div>
                </div>
                <div class="items-stats">
                    <div class="tag">
                        <p>COVID-19</p>
                    </div>
                    <div class="item-covid">
                        <i class="bi bi-heart icons"></i>
                        <div>
                            <h1>29/100</h1>
                            <h4>Positivos / Negativos</h4>
                        </div>
                    </div>
                    <div class="date">
                        <p>10 FEB. 2022</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="coming-soon-info">
            <div>
                <h3>Facturación</h3>
                <h2>Próximamente</h2>
            </div>
        </div>        
    </div>

@endsection
