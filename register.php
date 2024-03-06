<?php
include 'layouts/header.php';
?>

    <div class="page-wrapper bg-blue p-t-100 p-b-100 font-robo">
        <div class="wrapper wrapper--w680">
            <div class="card card-1">
                <div class="card-heading"></div>
                <div class="card-body">
                    <h2 class="title">Registration Info</h2>
                    <form method="POST">
                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="Username" name="nama">
                        </div>
                    
                            <div class="input-group">
                                <div class="rs-select2 js-select-simple select--no-search">
                                    <select name="class">
                                        <option disabled="disabled" selected="selected"> Jabatan</option>
                                                <option>sffefsefef</option>
                                                <option>sffefsefef</option>
                                                <option>sffefsefef</option>
                                                <option>sffefsefef</option>
                                        
                                    </select>
                                    <div class="select-dropdown"></div>
                                </div>
                            </div> 
                            <div class="input-group">
                                <div class="rs-select2 js-select-simple select--no-search">
                                    <select name="class">
                                        <option disabled="disabled" selected="selected">Nama Instuisi/Sekolah</option>
                                        <option>sffefsefef</option>
                                        <option>sffefsefef</option>
                                        <option>sffefsefef</option>
                                        <option>sffefsefef</option>
                                        
                                    </select>
                                    <div class="select-dropdown"></div>
                                </div>
                            </div> 
                            <div class="input-group">
                                <div class="rs-select2 js-select-simple select--no-search">
                                    <select name="class">
                                        <option disabled="disabled" selected="selected">Kota/Kabupaten</option>
                                        <option>sffefsefef</option>
                                        <option>sffefsefef</option>
                                        <option>sffefsefef</option>
                                        <option>sffefsefef</option>
                                        
                                    </select>
                                    <div class="select-dropdown"></div>
                                </div>
                            </div> 
                    
                            
                        <div class="input-group">
                            <input class="input--style-1" type="number" placeholder="Whatsapp" name="no_wa">
                        </div>

                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="Email" name="email">
                        </div>

                        <div class="row row-space">
                            
                                <div class="input-group">
                                    <input class="input--style-1" type="password" placeholder="password" name="password">
                                </div>
                            
                        </div>
                        <div class="p-t-20">
                            <button class="btn btn--radius btn--green" type="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

<?php
include 'layouts/footer.php';
?>