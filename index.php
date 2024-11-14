<?php
include_once 'header.php';
?>
<div class="container my-3">
	<div class="card p-3">
		<div class="input-group mb-3">
			<form action="submit.php" method="post" class="">
				<input type="text" class="form-control my-3" name="nama" placeholder="Nama" aria-label="Nama" require aria-describedby="">
                <input type="text" class="form-control my-3" name="email" placeholder="Email" aria-label="Email" require aria-describedby="">
                <input type="text" class="form-control my-3" name="nomor" placeholder="Nomor" aria-label="No HP" require aria-describedby="">
                <button class="btn btn-outline-primary " name="=add" type="submit" id="">Add</button>
			</form>
		</div>
	</div>
</div>

<!---->
<!--<div class="container my-3">-->
<!--	<div class="card p-3">-->
<!--		<div class="form-check d-flex align-items-center">-->
<!--			<div class="flex-grow-1">-->
<!--				<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">-->
<!--				<label class="form-check-label" for="flexCheckDefault">Mandi</label>-->
<!--			</div>-->
<!--			<div>-->
<!--				<button type="button" class="btn btn-warning text-white"><i class="fa-regular fa-file-pen me-1"></i>Edit</button>-->
<!--				<button type="button" class="btn btn-danger"><i class="fa-sharp-duotone fa-solid fa-trash me-1"></i>Hapus-->
<!--				</button>-->
<!--			</div>-->
<!--		</div>-->
<!--	</div>-->
<!--</div>-->
<!--<div class="container my-3">-->
<!--	<div class="card p-3">-->
<!--		<div class="form-check d-flex align-items-center">-->
<!--			<div class="flex-grow-1">-->
<!--				<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault2" checked>-->
<!--				<label class="form-check-label done" for="flexCheckDefault2">-->
<!--					Kerjain PR-->
<!--				</label>-->
<!--			</div>-->
<!--			<div>-->
<!--				<button type="button" class="btn btn-warning text-white"><i class="fa-regular fa-file-pen me-1"></i>Edit</button>-->
<!--				<button type="button" class="btn btn-danger"><i class="fa-sharp-duotone fa-solid fa-trash me-1"></i>Hapus-->
<!--				</button>-->
<!--			</div>-->
<!--		</div>-->
<!--	</div>-->
<!--</div>-->


<?php
include_once 'footer.php';
