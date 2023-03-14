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
// 