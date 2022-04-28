<div class="container-fluid">
            <div class="" style="margin-top:100px">
            <!-- <div class="shadow mb-5"> -->
                <div class="rounded d-flex justify-content-center">
           
                    <div class="col-md-6 m-3 bg-light.bg-gradient">

                        <form method="POST">
                            <div class="p-4">
								 <!-- style="color:#2c7b88" -->

                                <div class="input-group mb-3">
                                    <span class="input-group-text" style="background-color:#2c7b88"><i
                                            class="bi bi-person-fill text-white"></i></span>
                                    <input type="text" class="form-control" name="username" placeholder="Nombre de usuario">
                                </div>

                                <div class="input-group mb-3">
                                    <span class="input-group-text" style="background-color:#2c7b88"><i
                                            class="bi bi-chat-quote-fill text-white"></i></span>
                                    <input type="text" class="form-control" name="palabra" placeholder="Palabras a buscar">
                                </div>
								
								<div class="input-group mb-3">
                                    <span class="input-group-text "style="background-color:#2c7b88"><i
                                            class="bi bi-star-fill text-white"></i></span>
                                    <input type="text" class="form-control" name="sitio" placeholder="Sitio Cercano">
                                </div>

								<div class="input-group mb-3">
                                    <span class="input-group-text "style="background-color:#2c7b88"><i
                                            class="bi bi-geo-alt-fill text-white"></i></span>
                                    <input type="text" class="form-control" name="geo" placeholder="Coordenadas,Radio">
                                </div>

                                
                                <div class="input-group mb-3">
                                    <span class="input-group-text "style="background-color:#2c7b88"><i
                                            class="bi bi-calendar text-white"></i></span>
                                    <input type="date" class="form-control" name="fechaini" placeholder="Fecha inicio">
                                </div>
								
								<div class="input-group mb-3">
                                    <span class="input-group-text "style="background-color:#2c7b88"><i
                                            class="bi bi-calendar text-white"></i></span>
                                    <input type="date" class="form-control" name="fechafin" placeholder="Fecha fin">
                                </div>    

                                <div class="input-group mb-3">
                                    <span class="input-group-text "style="background-color:#2c7b88"><i
                                            class="bi bi-arrow-right-square text-white"></i></span>
                                    <input type="number" class="form-control" name="maximo" value="10">
                                </div>
								 
								
								<div class="input-group ">
                                    <input type="checkbox" class="btn-check" name="email" id="btn-check-email" value="1" unchecked>
									<label class="btn btn-outline-warning" for="btn-check-email"><i class="bi bi-envelope">  &nbsp;</i>   Email</label>	
                                &nbsp;
								&nbsp;
								&nbsp;
									<input type="checkbox" class="btn-check" name="phone" id="btn-check-phone" value="1" unchecked>
									<label class="btn btn-outline-warning " for="btn-check-phone"><i class="bi bi-telephone"> &nbsp;</i>   Phone</label>
								</div>
								
								
								
                                <button class="btn text-center mt-5 text-white" style="background-color:#2c7b88" name="search" value="1" type="submit">
                                <i class="bi bi-search "> &nbsp;</i>  Search
                                </button>                          
                            </div>
                        </form>
                    </div>