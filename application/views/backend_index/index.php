<div class="wrapper wrapper-content">

    <!-- MENSAJES DE CONFIRMACIÓN -->
    <?php if ( $this->session->flashdata('ControllerMessage') != '' ){ ?>
        <div class="row"> 
            <div class="col-lg-12">   
                <div class="alert alert-info">
                    <?=$this->session->flashdata('ControllerMessage'); ?>
                </div>
            </div>
        </div>            
    <?php } ?>
    
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title" style="border-top: 2px solid #1c84c6;">
                    <h5>Proyectos | Actividad reciente </h5>
                    <div class="ibox-tools">
                        <a class="collapse-link">
                            <i class="fa fa-chevron-up"></i>
                        </a>
                        <a class="close-link">
                            <i class="fa fa-times"></i>
                        </a>
                    </div>
                </div>
                <div class="ibox-content">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                            <tr>

                                <th>ID</th>
                                <th>Código </th>
                                <th>Proyecto </th>
                                <th>Responsable </th>
                                <th>Cierre </th>
                                <th>Días activo </th>
                                <th>Status</th>
                                <th>Detalle</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>1</td>
                                <td>BUI-25-JUL</td>
                                <td>Tendido de fibra Juliac</td>
                                <td>José Zavaleta</td>
                                <td>30 Abril, 2015</td>
                                <td><span class="pie">0.50/1.500</span> 40%</td>
                                <td>25</td>
                                <td><a href="proyectos.html"><i class="fa fa-search"></i></a></td>
                            </tr>                    

                            <tr>
                                <td>2</td>
                                <td>HUJ-12-YHJ</td>
                                <td>Instalación Infraestructura San Borja</td>
                                <td>Renzo Albarracín</td>
                                <td>05 Mayo, 2015</td>
                                <td><span class="pie">0.70/1.200</span> 30%</td>
                                <td>15</td>
                                <td><a href="proyectos.html"><i class="fa fa-search"></i></a></td>
                            </tr>

                            <tr class="danger">
                                <td>3</td>
                                <td>KJL-28-YUI</td>
                                <td>Central base repetidora Lima</td>
                                <td>Noemí Arrieta</td>
                                <td>10 Abril, 2015</td>
                                <td><span class="pie">0.20/1.350</span> 65%</td>
                                <td>20</td>
                                <td><a href="proyectos.html"><i class="fa fa-search"></i></a></td>
                            </tr>

                            <tr>
                                <td>4</td>
                                <td>DFY-56-SLI</td>
                                <td>Tendido de cableado cobre San Luis</td>
                                <td>Erick Sulca</td>
                                <td>25 Mayo, 2015</td>
                                <td><span class="pie">0.80/1.400</span> 70%</td>
                                <td>35</td>
                                <td><a href="proyectos.html"><i class="fa fa-search"></i></a></td>
                            </tr>

                            <tr>
                                <td>5</td>
                                <td>ERT-56-MAG</td>
                                <td>Inspección técnica Base 2 Magadalena</td>
                                <td>Roberto Atocha</td>
                                <td>30 Mayo, 2015</td>
                                <td><span class="pie">0.75/1.150</span> 65%</td>
                                <td>32</td>
                                <td><a href="proyectos.html"><i class="fa fa-search"></i></a></td>
                            </tr>

                            <tr>
                                <td>6</td>
                                <td>POL-56-MOL</td>
                                <td>Reparación Corte de fibra La Molina</td>
                                <td>Jaime Subiabre</td>
                                <td>12 Mayo, 2015</td>
                                <td><span class="pie">0.50/1.125</span> 50%</td>
                                <td>40</td>
                                <td><a href="proyectos.html"><i class="fa fa-search"></i></a></td>
                            </tr>

                            <tr class="info">
                                <td>7</td>
                                <td>HJU-56-LIM</td>
                                <td>Instalación antenas parabolicas</td>
                                <td>Jaime Subiabre</td>
                                <td>16 Mayo, 2015</td>
                                <td><span class="pie">1.20/1.125</span> 100%</td>
                                <td>45</td>
                                <td><a href="proyectos.html"><i class="fa fa-search"></i></a></td>
                            </tr>

                            <tr>
                                <td>8</td>
                                <td>FGT-36-ICA</td>
                                <td>Tendido de fibra ICA</td>
                                <td>Juan Ferrel</td>
                                <td>22 Mayo, 2015</td>
                                <td><span class="pie">0.20/1.125</span> 20%</td>
                                <td>48</td>
                                <td><a href="proyectos.html"><i class="fa fa-search"></i></a></td>
                            </tr>
                            

                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>    