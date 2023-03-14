let
selectedFile;
console.log(window.SLSX)

document.getElementById("input").addEventListener("change",function(event){
    selectedFile = event.target.files[0];
})

document.getElementById("button").addEventListener("click",function(){
    if(selectedFile){
        let reader = new FileReader();
        reader.readAsBinaryString(selectedFile);
        reader.onload = function(event){
           let data = event.target.result;
           let workerbook=XLSX.read(data,{type:'binary'});
           console.lo(workerbook)
           workerbook.SheetNames.forEach(function(sheet){
            let rowObject=XLSX.utils.sheet_to_row_object_array(workerbook.Sheets[sheet]);
            console.log(rowObject);
            console.log(JSON.stringify(rowObject,undefined,4 ))
           })
        }
    }
})
// <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.18.5/xlsx.full.min.js" integrity="sha512-r22gChDnGvBylk90+2e/ycr3RVrDi8DIOkIGNhJlKfuyQM4tIRAI062MaV8sfjQKYVGjOBaZBOA87z+IhZE9DA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
