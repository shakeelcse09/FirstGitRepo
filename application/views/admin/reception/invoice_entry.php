<?php



echo validation_errors();

echo form_open('admin/submit_invoice_entry');
?>

<div class="container">
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  <div class="row">
    <div class="col-xs-10 ">
    	<label for="patientname"> Patient Name: *</label>
		
	 <select class="form-control" id="patientage" name="patientage">
        
			<?php foreach($result  as $result): ?>
 <?php 


 echo "<option value=' 
 $result->name'>$result->name</option>";
 
  ?>

 
 <?php endforeach; ?> 
		
		
		
		
		
		
		
      </select>
	  
	  
	  <datalist id="patient-list"> </datalist>
    </div>
  </div>

  

  <div class="row">
    <div class="col-xs-2">
      <label for="age"> Age:</label>
      <select class="form-control" id="patientage" name="patientage">
        <?php for ($i=1; $i < 150; $i++) { 
          # code...
          echo "<option value='$i'>$i</option>";
        } ?>
      </select>
    </div>

     <div class="col-xs-2">
      <label for="sex"> Sex: </label>
      <select class="form-control" id="patientsex" name="patientsex">
        <option value="male">Male</option>
        <option value="female">Female</option>
      </select>
    </div>

    <div class="col-xs-5 col-md-offset-1">
    	<label for="mondoc"> Monitoring Doctor: </label>
      <select class="form-control" id="mondoc" name="mondoc" >
        <option value="">Select</option>
          
			<?php foreach($resultd  as $resultd): ?>
 <?php 


 echo "<option value=' 
 $resultd->doctorname'>$resultd->doctorname</option>";
 
  ?>

 
 <?php endforeach; ?> 
		
		
		
      </select>
  </div>
    
  </div>
  <div class="row">
    <div class="col-xs-4 ">
      <label for="billdate"> Bill Date: </label>
      <input type="text" id="billdate" class="form-control" name="billdate" value="" >
    </div>
    <div class="col-xs-3 col-md-offset-1">
      <label for="refdoc"> Reference Doctor: </label>
      <input type="text" class="form-control" id="refdoc" name="refdoc" placeholder="Reference Doctor Name">
    </div>
    <div class="col-xs-2">
      <label for="doccommission"> Commission: (%) </label>
      <input type="text" class="form-control" id="doccom" name="doccom" placeholder="Doctor Commission">
    </div>
  </div>
  
  <div class="row">
      <br/>
      <br/>
      <div class="col-xs-12">
      <label for="separator"> Enter Items ..       </label>
      
      </div>
  </div>

  
    <div class="row">
      <div class="col-xs-1">
        <label for="serial" class="sr_only"> </label>
        <input type="text" id="labitemsn" value="1" name="labitemsn" class="form-control" readonly>
      </div>
      <div class="col-xs-3">
        <label for="serial" class="sr_only"> </label>
        <input type="text" id="labitemname" name="labitemname" value="" list="labitem-list" class="form-control" placeholder="Lab Item Name"  >
        <datalist id="labitem-list"></datalist>
      </div>

            <div class="col-xs-2">
        <label for="serial" class="sr_only"> </label>
        <input type="text" id="labitemmrp" name="labitemmrp"  value="" class="form-control" placeholder="MRP" >
      </div>
            <div class="col-xs-2">
        <label for="serial" class="sr_only"> </label>
        <input type="text" id="labitemqty" name="labitemqty" value="" class="form-control" placeholder="Quantity"  >
      </div>
      <div class="col-xs-2">
        <label for="serial" class="sr_only"> </label>
        <input type="text" id="labmrptotal" name="labmrptotal" value="" class="form-control" placeholder="Total"  >
      </div>
      <div class="col-xs-2">
        <label for="serial" class="sr_only"> </label>
        <button type="button" id="itemadd" value="Add" class="btn btn-sm"  >Add</button>
      </div>

    </div>


  <div class="row">
    &nbsp;
  </div>

  <div class="row">
    <table class="table table-striped" id="labitems" style="visibility:hidden">
        <thead>
          <tr>
            <th>#</th>
            <th>Item Name</th>
            <th>Item Mrp</th>
            <th>Item Quantity</th>
            <th>Mrp Total</th>
            <th>Delete</th>
          </tr>
        </thead>
        <tbody id="rowbody">

        </tbody>
      </table>
  </div>

  <div class="row">
    <div class="col-xs-1">
      <label for="space"> &nbsp;</label>
      <button type="submit" id="btn-invoice-submit" class="btn btn-primary">Save Bill</button>
    </div>
    
  </div>

</div>

<script type="text/javascript" src="<?php echo base_url(); ?>js/lab/ajax-fetch-lists.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>js/lab/lab-invoice-validation.js"></script>
<script type="text/javascript">
$('#billdate').datepicker({format:'yyyy-mm-dd'});
</script>
<?php echo form_close();


?>