<?php include_once("atas.php");?>
<div class="container">
<h1>TABEL MAHASISWA</h1>
<?php $no = 1; ?>
<?php echo anchor("welcome/create","Tambah Data",["class"=>"btn btn-primary"]); ?>
<table class="table table-striped table-dark">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
	  <th>Tools</th>
    </tr>
  </thead>
  <tbody>
  <?php if(count($posts)):?>
  <?php foreach($posts as $post):?>
    <tr>
      <th scope="row"><?php echo $no; ?></th>
      <td><?php echo $post->nim; ?></td>
      <td><?php echo $post->nama; ?></td>
      <td><?php echo $post->email; ?></td>
	  <td>
	  <?php echo anchor("welcome/view","lihat",["class"=>"label label-primary"]); ?>
	  <?php echo anchor("welcome/update","ubah",["class"=>"label label-primary"]); ?>
	  <?php echo anchor("welcome/delete","hapus",["class"=>"label label-primary"]); ?>
	  </td> 
    </tr>
<?php $no++; ?>
<?php endforeach;?>
<?php else: ?>
	<tr>
		<td>tidak ada data!</td>
	</tr>
<?php endif; ?>
  </tbody>
</table>
</div>
<?php include_once("bawah.php");?>