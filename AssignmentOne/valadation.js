/**
 * Created by inet2005 on 9/29/14.
 */

function validateForm()
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
    else if(!document.getElementById("terms").checked)
    {
        var myFormItem = document.getElementById("checkboxSpan");
        myFormItem.style.color = "red";
        myFormItem.innerHTML = " Must accept terms and conditions.";
        return false;
    }//end if
}//end function

function italicText(fieldID)
{
    var myFormItem = document.getElementById(fieldID);
    var myFormItemLabel = myFormItem + "Label";
    if(myFormItem != null)
    {
        myFormItem.style.fontStyle = "italic";
        myFormItem.style.backgroundColor = "yellow";
        myFormItemLabel.style.textDecoration = "underline";
    }//end if
}//end function

function normalText(fieldID)
{
    var myFormItem = document.getElementById(fieldID);
    var myFormItemLabel = myFormItem + "Label";
    if(myFormItem != null)
    {
        myFormItem.style.fontStyle = "normal";
        myFormItem.style.backgroundColor = "white";
        myFormItemLabel.style.textDecoration = "none";
    }//end if
}//end function
