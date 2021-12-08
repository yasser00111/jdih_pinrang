    
    <br>
    <footer class="warna-bg">
        <div class="container">
        <div class="row">
            <div class="col-md-4">

            </div>
            <div class="col-md-4">
                <div class="text-white text-center pt-3 pb-3">
                Copyright @2020 Nurmia Bora
                </div>
            </div>
            <div class="col-md-4">
            <div class="text-white pt-3 pb-3">
            <h3>Statistik Pengunjung</h3>
 
                <table id="foot-table-list">
                <tr> 
                
                    <td>Pengunjung Hari ini</td>
                
                    <td>&nbsp;&nbsp;:&nbsp;&nbsp;</td>
                
                    <td><?php echo $pengunjunghariini ?> orang</td>
                
                </tr>
                
                <tr>
                
                    <td>Total Pengunjung</td> 
                
                    <td>&nbsp;&nbsp;:&nbsp;&nbsp;</td>
                
                    <td><?php echo $totalpengunjung ?> orang</td>
                
                </tr>
                
                <tr>
                
                    <td>Pengunjung Online</td>
                
                    <td>&nbsp;&nbsp;:&nbsp;&nbsp;</td>
                
                    <td><?php echo $pengunjungonline ?> orang</td>
                
                </tr>
                
                </table>
            </div>
            </div>
        </div>
        </div>
        
    </footer>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    
    <script src="<?php echo base_url('assets/fonts/js/all.js') ?>"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <!-- <script type="text/javascript" src="http://jdih.mimikakab.go.id/mimika/datatables/js/jquery.dataTables.min.js"></script>
	<script type="text/javascript" src="http://jdih.mimikakab.go.id/mimika/datatables/js/dataTables.bootstrap.min.js"></script> -->
	<script type="text/javascript">
	$(document).ready(function() {
		$('#table_hukum').DataTable({
		'paging'      : true,
		'lengthChange': false,
		'searching'   : true,
		'ordering'    : false,
		'info'        : true,
		'autoWidth'   : true
		});
	})
	</script>
    
</html>