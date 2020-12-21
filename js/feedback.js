function formValidation()
{
var ufname = document.feedback.fname;
var ulname = document.feedback.lname;
var uemail = document.feedback.email;
var uexp = document.feedback.exp;
var uselect= document.feedback.select;
var ufeed_back = document.feedback.feed_back;
var ua = document.feedback.a;
var ub = document.feedback.b;
var uc = document.feedback.c;
var ud = document.feedback.d;
var ue = document.feedback.e;
var uf = document.feedback.f;
if(allLetter1(ufname))
{
	if(allLetter2(ulname))
	{ 
		if(ValidateEmail(uemail))
		{
			if(validexp(ud,ue,uf))
			{
				if(validselect(ua,ub,uc))
				{
					if(allLetter3(ufeed_back))
					{

					}
				}
			}
		}
	}
}
return false;

} 
function allLetter1(ufname)
{ 	
	var letters = /^[A-Za-z]+$/;
	if(ufname.value.match(letters))
	{
		return true;
	}
	else
	{
		alert('Name must have alphabet characters only/ Required to filled');
		ufname.focus();
	}
}
function allLetter2(ulname)
{ 	
	var letters = /^[A-Za-z]+$/;
		if(ulname.value.match(letters))
		{
			return true;
		}
		else
		{
			alert(' Last name must have alphabet characters only/ Required to filled');
			ulname.focus();
			return false;
		}
	
}
function ValidateEmail(uemail)
{
	var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
	if(uemail.value.match(mailformat))
	{
		return true;
	}
	else
	{
		alert("You have entered an invalid email address!/Required to be filled");
		uemail.focus();
		return false;
	}
}
function validexp(ud,ue,uf)
{
	x=0;

	if(ud.checked) 
	{
		x++;
	} 
	if(ue.checked)
	{
		x++; 
	}
	if(uf.checked)
	{
		x++; 
	}
	if(x==0)
	{
		alert('Select Bad/Good/Excellent');
		ue.focus();
		uf.focus();
		ud.focus();
		return false;
	}
}
function validselect(ua,ub,uc)
{
	x=0;

	if(ua.checked) 
	{
		x++;
	} 
	if(ub.checked)
	{
		x++; 
	}
	if(uc.checked)
	{
		x++; 
	}
	if(x==0)
	{
		alert('Select Comments/suggestions/Questions');
		ua.focus();
		ub.focus();
		uc.focus();
		return false;
	}
}
function allLetter3(ufeed_back)
{ 
	var letters = /^[A-Za-z]+$/;
	if(ufeed_back.value.match(letters))
	{
		alert('Form Succesfully Submitted');
		window.location.reload()
		return true;
	}
	else
	{
		alert('Must have alphabet characters only/ Filled');
		ufeed_back.focus();
		return false;
	}
	
}
