var ajaxUrl = "/_index_ajax.php"
var typeDoor = {
    "garage" : {
        "id": 1,
        "name": "Гаражные",
        "width": 2000,
        "height": 1800,
        "param_ids": [
            "calc_width",
            "calc_height",
            "calc_profile",
            "calc_manufacture",
            "calc_control",
            "calc_color",
            "calc_wicket",
        ],
        "params_options": {
            "calc_profile":{
                1:"Доска (под дерево)",
                2:"Широкая полоса (под дерево)",
                3:"Филенка (под дерево)",
                4:"Волна (stucco)",
            },
            "calc_manufacture":{
                1:"Doorhan (лучший выбор)",
                2:"Alutech",
            },
            "calc_control":{
                1:"Ручной цепной привод",
                2:"Электропривод",
                3:"Механическое",
            },
            "calc_wicket":{
				3:"Без калитки",
                1:"Встроенная",
            },
            "calc_color":{
                1 : "Коричневый RAL8017",
                2: "Белый RAL9003",
                3: "Коричневый RAL8014",
                4: "Серый RAL7004",
                5: "Серебристый RAL9006",
                6: "Зеленый RAL6005",
                7: "Бордовый RAL3005",
                8: "Бежевый RAL1014",
                9: "Синий RAL5005",
                10: "Антрацит RAL7016",
                11: "Красный RAL3000",
                12: "Золотой дуб (ламинация)",
                13: "Венге (ламинация)",
            },
        },
    },
    "industrial" : {
        "id": 2,
        "name": "Промышленные",
        "width":2000,
        "height":2000,
        "param_ids":[
            "calc_width",
            "calc_height",
            "calc_profile",
            "calc_manufacture",
            "calc_control",
            "calc_color",
            "calc_wicket",
        ],
        "params_options": {
            "calc_profile":{
                1:"Доска (под дерево)",
                2:"Широкая полоса (под дерево)",
                4:"Волна (stucco)",
            },
            "calc_manufacture":{
                1:"Doorhan (лучший выбор)",
                2:"Alutech",
            },
            "calc_control":{
                1:"Ручной цепной привод",
                2:"Электропривод",
                3:"Ручное",
                4:"Механическое",
            },
            "calc_wicket":{
				3:"Без калитки",
                1:"Встроенная",
            },
			"calc_color":{
				1 : "Коричневый RAL8017",
				2: "Белый RAL9003",
				3: "Коричневый RAL8014",
				4: "Серый RAL7004",
				5: "Серебристый RAL9006",
				6: "Зеленый RAL6005",
				7: "Бордовый RAL3005",
				8: "Бежевый RAL1014",
				9: "Синий RAL5005",
				10: "Антрацит RAL7016",
				11: "Красный RAL3000",
				12: "Золотой дуб (ламинация)",
				13: "Венге (ламинация)",
			},
        },
    },
    "recoiling" : {
        "id": 3,
        "name": "Откатные",
        "width":3000,
        "height":1000,
        "param_ids":[
            "calc_width",
            "calc_height",
            "calc_rack",
            "calc_plate",
            "calc_control",
            "calc_color",
            "calc_fundament",
            "calc_type_color",
            "calc_wicket",
        ],
        "params_options": {
            "calc_rack":{
                1:"Стальной",
                2:"Алюминевый",
            },
            "calc_plate":{
                1:"Каркас под заполнение Заказчика",
                2:"Профлист",
                3:"Обрешетка",
                4:"Сэндвич-панель",
            },
            "calc_control":{
                2:"Электропривод",
                4:"Механическое",
            },
            "calc_fundament":{
                1:"Свайный",
                2:"Бетонный",
                3:"Силами заказчика",
            },
            "calc_type_color":{
                1:"Жидкая краска",
            },
            "calc_wicket":{
				3:"Без калитки",
                1:"Встроенная",
                2:"Отдельностоящая",
            },
			"calc_color":{
				1 : "Коричневый RAL8017",
				2: "Коричневый RAL8014",
				3: "Зеленый RAL6005",
				4: "Бордовый RAL3005",
				5: "Белый RAL9003",
				6: "Серебристый RAL9006",
				7: "Бежевый RAL1014",
				8: "Синий RAL5005",
				9: "Антрацит RAL7016",
			},
        },
    },
    "swinging" : {
        "id": 4,
        "name": "Гаражные",
        "width":3000,
        "height":1000,
        "param_ids":[
            "calc_width",
            "calc_height",
            "calc_rack",
            "calc_plate",
            "calc_control",
            "calc_color",
            "calc_type_color",
            "calc_wicket",
        ],
        "params_options": {
            "calc_rack":{
                1:"Стальной",
                2:"Алюминевый",
            },
            "calc_plate":{
                1:"Каркас под заполнение Заказчика",
                2:"Профлист",
                3:"Обрешетка",
                4:"Сэндвич-панель",
            },
            "calc_control":{
                2:"Электропривод",
                4:"Механическое",
            },
            "calc_type_color":{
                1:"Жидкая краска",
            },
            "calc_wicket":{
				3:"Без калитки",
                1:"Встроенная",
                2:"Отдельностоящая",
            },
			"calc_color":{
				1 : "Коричневый RAL8017",
				2: "Коричневый RAL8014",
				3: "Зеленый RAL6005",
				4: "Бордовый RAL3005",
				5: "Белый RAL9003",
				6: "Серебристый RAL9006",
				7: "Бежевый RAL1014",
				8: "Синий RAL5005",
				9: "Антрацит RAL7016",
			},
        },
    }
};
var $calculatorBlock = $("#calculator");
var $activeTab = $calculatorBlock.find(".tabs .btn.active");
$(document).ready(function(){
    $calculatorBlock.find("select").select2();

    refreshTabParams($activeTab.data("id"));

    $calculatorBlock.on("click", ".tabs .btn", function(){
        $calculatorBlock.find(".tabs .btn").removeClass("active");
        $(this).addClass("active");
        hiddenParams($(this));
    });
	$calculatorBlock.on("change", "select, input", function(){
        var door_type = $calculatorBlock.find(".tabs .btn.active").data("id");
        var calc_profile = $calculatorBlock.find(".params:not(.hidden) #calc_profile").val();
		var calc_manufacture = $calculatorBlock.find(".params:not(.hidden) #calc_manufacture").val();
		var calc_plate = $calculatorBlock.find(".params:not(.hidden) #calc_plate").val();
		var calc_control = $calculatorBlock.find(".params:not(.hidden) #calc_control").val();
		var calc_color = $calculatorBlock.find(".params:not(.hidden) #calc_color").val();
		var calc_fundament = $calculatorBlock.find(".params:not(.hidden) #calc_fundament").val();
		var calc_type_color = $calculatorBlock.find(".params:not(.hidden) #calc_type_color").val();
		var calc_wicket = $calculatorBlock.find(".params:not(.hidden) #calc_wicket").val();
		var calc_lock = $calculatorBlock.find(".params:not(.hidden) #calc_lock").val();
		$.ajax({
			url: ajaxUrl,
			type: "post",
			dataType: "json",
			data: {
				ACTION: "getCalculatePhotoUrl",
				PARAMETERS: {
                    door_type:door_type,
                    calc_profile:calc_profile,
                    calc_plate:calc_plate,
                    calc_color:calc_color,
                    calc_wicket:calc_wicket,
				}
			}
		}).done(function (result) {
			$calculatorBlock.find("#calc_img").attr("src", result.data);
		});


    });
});
function hiddenParams($tab){
    var tabAlias = $tab.data("id");
    refreshTabParams(tabAlias);
}
function refreshTabParams(tabAlias){
	switch (tabAlias){
		case "garage":$calculatorBlock.find("#calc_img").attr("src", "/img/calculator/garage/default.jpg"); break;
		case "industrial":$calculatorBlock.find("#calc_img").attr("src", "/img/calculator/industrial/default.jpg"); break;
		case "recoiling":$calculatorBlock.find("#calc_img").attr("src", "/img/calculator/recoiling/default.jpg"); break;
		case "swinging":$calculatorBlock.find("#calc_img").attr("src", "/img/calculator/swinging/default.jpg"); break;
	}
    $calculatorBlock.find("select").select2("destroy");
    $calculatorBlock.find(".params").addClass("hidden");

    $calculatorBlock.find(".params[data-id=\"calc_width\"] input").val(typeDoor[tabAlias].width);
    $calculatorBlock.find(".params[data-id=\"calc_height\"] input").val(typeDoor[tabAlias].height);
    $.each(typeDoor[tabAlias].param_ids, function(i, alias){
        $calculatorBlock.find(".params[data-id='"+alias+"']").removeClass("hidden");
    });

    $.each(typeDoor[tabAlias].params_options, function(alias, optionValues){

        $calculatorBlock.find("#" + alias + " option").addClass("hidden");
        var valueHtml = "<option value='0'>Выберите</option>";
        $.each(optionValues, function(value, name){
            valueHtml += "<option value='"+value+"'>"+name+"</option>";
        });
        $calculatorBlock.find("#" + alias).html(valueHtml);
    });
    $calculatorBlock.find("select").select2({minimumResultsForSearch: -1});
}
