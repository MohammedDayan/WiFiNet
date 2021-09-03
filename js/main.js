  


function verify(form) {
  var packageName
  var pack= document.transac.package.value;
  if (pack==2) {
    packageName="2 Cedis 400 Mb"
  }
  else if (pack==5) {
    packageName="5 Cedis 1 Gb";
  } else if (pack==10) {
    packageName="10 Cedis 3 Gb";
  } else {
    
  }
 var qnty=  document.transac.quantity.value;
total=qnty*pack;

document.getElementById("verifypack").append(packageName);
document.getElementById("verifyqnty").append(qnty);
document.getElementById("verifytotal").append(total);
}
