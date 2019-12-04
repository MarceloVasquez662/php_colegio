function validarIngresoProfesor()
{
    var val1 = validarRut();
    return val1;
}

function validarCrearCurso()
{
    var val1 = validarCodigo();
    var val2 = validarProfesor();
    return val1 && val2;
}

function validarCrearAsignatura()
{
    var val1 = validarCodigo();
    return val1;
}

function validarIngresoAlumno()
{
    var val1 = validarRut();
    var val2 = validarCurso();
    return val1 && val2;
}

function validarCurso()
{
    var curso = document.getElementById("cursos");
    var selected = curso.options[curso.selectedIndex].text;
    if (selected == "Seleccione un curso")
    {
        alert("Debe seleccionar un curso al alumno");
        return false;
    } else
    {
        return true;
    }
}

function validarRut()
{
    var rut = document.getElementById("rut").value;
    var regex = /^\d{1,2}\.\d{3}\.\d{3}[-][0-9kK]{1}$/;
    if (!regex.test(rut))
    {
        alert("El formato de rut no es correcto.");
        return false;
    } else
    {
        return true;
    }
}

function validarCodigo()
{
    var codigo = parseInt(document.getElementById("codigo").value);
    if (isNaN(codigo))
    {
        alert("El codigo ingresado no es numerico entero");
        return false;
    } else
    {
        return true;
    }
}

function validarProfesor()
{
    var profesor = document.getElementById("rutJefe");
    var selected = profesor.options[profesor.selectedIndex].text;
    if (selected == "Seleccione un Profesor")
    {
        alert("Debe seleccionar una profesor para el curso");
        return false;
    } else
    {
        return true;
    }
}

function validarAP()
{
    var profesor = document.getElementById("rut");
    var selected = profesor.options[profesor.selectedIndex].text;
    if (selected == "Seleccione un profesor")
    {
        alert("Debe seleccionar un profesor");
        return false;
    } else
    {
        return true;
    }
}

function validarCP()
{
    var curso = document.getElementById("cursos");
    var selected = curso.options[curso.selectedIndex].text;
    if (selected == "Seleccione un curso")
    {
        alert("Debe seleccionar un curso");
        return false;
    } else
    {
        return true;
    }
}

function 
validarSeleccionActualizar()
{
    var curso = document.getElementById("cursos");
    var profesor = document.getElementById("rutJefe");
    var selected = curso.options[curso.selectedIndex].text;
    var profesorselected = profesor.options[profesor.selectedIndex].text;
    if (selected == "Seleccione un curso")
    {
        alert("Debe seleccionar un curso");
        return false;
    } 
    else
    {
        if(profesorselected=="Seleccione un Profesor")   
        {
            alert("Debe seleccionar un profesor");
            return false;
        }
        else
        {
            return true;
        }
    }
}

            