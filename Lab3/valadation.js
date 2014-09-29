/**
 * Created by inet2005 on 9/29/14.
 */

function validateForm(fieldID)
{
    if(document.forms["myForm"].fname.value.length ==0)
    {
        var myFormItem = document.getElementById("fname");
        myFormItem.style.borderColor = "Red";
        return false;
    }//end if
    else if(document.forms["myForm"].lname.value.length ==0)
    {
        var myFormItem = document.getElementById("lname");
        myFormItem.style.borderColor = "Red";
        return false;
    }//end if
    else if(document.forms["myForm"].address1.value.length ==0)
    {
        var myFormItem = document.getElementById("address1");
        myFormItem.style.borderColor = "Red";
        return false;
    }//end if
    else if(document.forms["myForm"].address2.value.length ==0)
    {
        var myFormItem = document.getElementById("address2");
        myFormItem.style.borderColor = "Red";
        return false;
    }//end if
    else if(document.forms["myForm"].email.value.length ==0)
    {
        var myFormItem = document.getElementById("email");
        myFormItem.style.borderColor = "Red";
        return false;
    }//end if
    if(document.forms["myForm"].getElementById("terms").checked == false)
    {
        var myFormItem = document.getElementById("terms");
        myFormItem.span.color = "red";
        myFormItem.span.innerHTML = "Must accept terms and conditions.";
        return false;    }//end if
    else
    {
        return true;
    }//end else
}//end function

function italicText(fieldID)
{
    var myFormItem = document.getElementById(fieldID);
    if(myFormItem != null)
    {
        myFormItem.style.fontStyle = "italic";
        myFormItem.style.backgroundColor = 'yellow';
    }//end if
}//end function

function normalText(fieldID)
{
    var myFormItem = document.getElementById(fieldID);
    if(myFormItem != null)
    {
        myFormItem.style.fontStyle = "normal";
        myFormItem.style.backgroundColor = 'white';
    }//end if
}//end function

function underlineText(fieldID)
{
    var myFormItem = document.getElementById(fieldID);
    if(myFormItem != null)
    {
        myFormItem.style.textDecoration = "underline";
    }//end if
}//end function
