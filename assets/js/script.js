const flashData = $(".flash-data").data("flashdata");

if (flashData) {
	Swal.fire({
		position: "top",
		icon: "success",
		title: "Data Mahasiswa",
		text: "Berhasil " + flashData,
	});
}

//tombol hapus

$(".tombol-hapus").on("click", function (e) {
	e.preventDefault();
	const href = $(this).attr("href");
	Swal.fire({
		title: "Apakah Yakin ",
		text: "Data Mahasiswa Akan Dihapus ?",
		icon: "warning",
		showCancelButton: true,
		confirmButtonColor: "#3085d6",
		cancelButtonColor: "#d33",
		confirmButtonText: "Hapus Data!",
	}).then((result) => {
		if (result.isConfirmed) {
			document.location.href = href;
		}
	});
});
