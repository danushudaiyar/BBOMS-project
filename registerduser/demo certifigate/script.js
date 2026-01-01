const canvas = document.getElementById('canvas')
const ctx = canvas.getContext('2d')
const nameInput = document.getElementById('name')
const donationofInput = document.getElementById('donationof')

const downloadBtn = document.getElementById('download-btn')

const image = new Image()
image.src = 'certifigate.bboms.jpg'
image.onload = function () {
	drawImage()
}

function drawImage() {
	// ctx.clearRect(0, 0, canvas.width, canvas.height)
	ctx.drawImage(image, 0, 0, canvas.width, canvas.height)
	ctx.font = '30px monotype corsiva'
	ctx.fillStyle = '#000'
	ctx.fillText(nameInput.value, 180, 170)
	ctx.fillText(donationofInput.value, 240, 250)
	
}

nameInput.addEventListener('input', function () {
	drawImage()
})

	donationofInput.addEventListener('input', function () {
		drawImage()
})
orgInput.addEventListener('input', function () {
	drawImage()
})

downloadBtn.addEventListener('click', function () {
	downloadBtn.href = canvas.toDataURL('image/jpg')
	downloadBtn.download = 'Certificate- ' + nameInput.value + donationofInput.value
})


