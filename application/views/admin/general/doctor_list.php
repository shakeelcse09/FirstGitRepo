





<div class="container">
  
  
  
  
  
  
  
  
  

  
  
  <table border="1">

<tr border="1" bgcolor="green">
  <td width="150px">

  No
       
       </td>

<td width="150px">

     Doctor Name: 
		   
       </td>
    
<td width="150px">


      Joining Date
   

  </td>

<td width="150px">

     Speciality
       
     
   
</td>

<td width="150px">


     Address
 
  </td>


<td width="150px">

     Consultation Fee: 
       
   
   
</td>

<td width="150px">


      Phone No
   

  </td>
</tr>







  
  
 <?php 

 foreach ($query as $row) :
  
  
  ?>
  

 

 <?php  $ps =$row->id;  
 if ($ps % 2 ==0) {
  ?>

  <tr  bgcolor="gray">
 <?php

 }  

else
{

  ?>
  <tr >

  <?php
}


 ?>

  <td width="150px">

     <?php   echo $row->id;  ?>
       
       </td>

<td width="150px">

     <?php   echo $row->doctorname;  ?>
       
       </td>
    
<td width="150px">

 <?php   echo $row->doctordate;  ?>
      
   

  </td>

<td width="150px">

     <?php   echo $row->doctorspeciality;  ?>
       
     
   
</td>

<td width="150px">


     <?php   echo $row->doctoraddress;  ?>
  </td>


<td width="150px">

    <?php   echo $row->doctorfee;  ?>
       
   
   
</td>

<td width="150px">


     <?php   echo $row->doctorphone;  ?>
   

  </td>
</tr>







<?php

   endforeach;
?>















</table>

</div>

<script type="text/javascript" src="<?php echo base_url(); ?>js/lab/ajax-fetch-lists.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>js/lab/lab-invoice-validation.js"></script>
<script type="text/javascript">
$('#billdate').datepicker({format:'yyyy-mm-dd'});
</script>

<p>

  &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;
    &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;<br>
      &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;<br>
        &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;
          &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;







</p>