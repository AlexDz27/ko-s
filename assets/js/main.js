btn.onclick = () => {
  fileInput.click()
}

fileInput.onchange = (evt) => {
  console.log(evt.target.files[0])
  console.log(evt.target.files[0].name)

  submitBtn.style.display = 'inline-block'
  fileName.innerText = evt.target.files[0].name
}