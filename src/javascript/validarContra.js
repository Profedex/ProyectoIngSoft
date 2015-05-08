
//<script type="text/javascript">

		  function validar(form)
		  {
		    if(form.nombreU.value == "") {
		      alert("Error: El usuario no puede estar en blanco!");
		      form.nombreU.focus();
		      return false;
		    }
		    re = /^\w+$/;
		    if(!re.test(form.nombreU.value)) {
		      form.nombreU.value;
		      alert("Error: El nombre de usuario solo puede contener numeros y letras!");
		      form.nombreU.focus();
		      return false;
		    }

		    if(form.pass.value != "") {
		      if(form.pass.value.length < 6) {
		        form.pass.value="";
		        alert("Error: La contraseña debe tener al menos seis caracteres!");
		        form.pass.focus();
		        return false;
		      }
		      if(form.pass.value == form.nombreU.value) {
		        alert("Error: La contraseña debe ser diferente al nombre de usuario!");
		        form.pass.focus();
		        return false;
		      }
		      if(form.pass.value != form.passC.value){
		      	form.passC.value="";
		      	alert("Error: Las contraseñas no coinciden!");
		        form.passC.focus();
		        return false;
		      }
		      
		    } else {
		      alert("Error: Verifica que has introducido y confirmado tu contraseña");
		      form.pass.focus();
		      return false;
		    }

		    return true;
		  }

//</script>