$(document).ready(function () {
    ($('#l16-addClass').click(function () {
        $(this).addClass("active");
        alert("Class 'active' add to this button ");
    }));
    ($('#l16-removeClass').click(function () {
        $(this).removeClass();
        alert("Class 'for-remove' deleted from this button ");
    }));
    ($('#l16-toggleClass').click(function () {
        $(this).toggleClass('active');
        alert("Class toggle to active!");
    }));
    ($('#l16-getAttr').click(function () {
        var x = (this).getAttribute('id');
        alert("getAttribute value is - " + x);
    }));
    ($('#l16-setAttr').click(function () {
        (this).setAttribute("class", "democlass");
        alert("method setAttribute add 'democlass' to this button ");
    }));
    ($('#l16-alertOnClick').click(function () {
        alert("ALERT!!! :)");
    }));
    ($('#l16-triggerAlert').click(function () {
        $('#l16-alertOnClick').trigger('click');
    }));
    ($('#l16-cloneThis').click(function () {
        var x = $(this).text();
        $(this).clone().text(x + '(cloned)').appendTo($("#l16-cloneThis").parent('td'));
    }));
    ($('#l16-closestElement').click(function () {
        var x = $(this).parent();
        console.log(x);
    }));
    ($('#l16-eachBtnText').click(function () {
        var contents = [];
        $('td button').each(function (i, element) {
            contents.push($(element).text());
            console.log(contents[i]);
        });
    }));
    ($('#l16-findMe').click(function () {
        var x = $("body").find(this);
        console.log(x);
    }));
    ($('#l16-fadeInText').click(function () {
        $(this).next("div:hidden").fadeIn("slow");
    }));
    ($('#l16-fadeOutText').click(function () {
        $(this).next("div").fadeOut("slow");
    }));
    ($('#l16-hideText').click(function () {
        $(this).next("div").hide("slow");
    }));
    ($('#l16-showText').click(function () {
        $(this).next("div").show("slow");
    }));
    $('#l16-dataAboutMe').click(function () {
        var info = [];
        info.push($(this).height());
        info.push($(this).width());
        var br = this.getBoundingClientRect()
        info.push("x=" + br.left + " y=" + br.top);
        $(this).each(function() {
            $.each(this.attributes, function() {
                if(this.specified) {
                    info.push(this.name, this.value);
                }
            });
        });
        info.push(this.parentElement.nodeName);
        var prv_btn = $(this).closest("tr").prev().find('button');
        info.push(prv_btn.text());
        var next_btn = $(this).closest("tr").next().find('button');
        info.push(next_btn.text());
        info.push($(this).text());
        console.log(info);
    });
    $('form').submit(function (){
        return false;
    });
    ($('#submitLog').click(function () {
        var $form_data = {name:"", value:""};
        $('input').each(function() {
            $form_data.name = $(this).attr('name');
            $form_data.value = $(this).val();
            console.log($form_data);
        });
    }));
    ($('input, textarea, select').change(function(e){
        console.log($(this).attr('name')+':'+$(this).val());
    }));
    //при изменении одного поля - дублируем значение в другое поле
    ($('#name, #surname, #father_name').change(function(e){
        var userName, fatherName, surName;
        userName = $('#name').val();
        fatherName = $('#father_name').val();
        surName = $('#surname').val();
        console.log(userName+' '+fatherName+' '+surName);
        $('#full_name').val(surName+' '+userName+' '+fatherName);
    }));
})
