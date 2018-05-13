$(function() {
	//获取日期
	var datelocalssi = new Date();
	function calendar_index() {
		var enabled = 0;
		var today = new Date(datelocalssi);
		var day;
		var date;
		var centry = "";
		if (today.getDay() == 0) day = "星期日";
		if (today.getDay() == 1) day = "星期一";
		if (today.getDay() == 2) day = "星期二";
		if (today.getDay() == 3) day = "星期三";
		if (today.getDay() == 4) day = "星期四";
		if (today.getDay() == 5) day = "星期五";
		if (today.getDay() == 6) day = "星期六"
		if (today.getFullYear() < 2000) centry = "19";
		date1 = centry + (today.getFullYear()) + "年" + (today.getMonth() + 1) + "月" + today.getDate() + "日  ";
		date2 = "" + day + " ";
		$(".date").append(date1 + date2);
	}
	calendar_index();
	// 文本框聚焦效果
	function focusTxt() {
		var a0 = arguments[0][0],
		a1 = arguments[0][1];
		$('.' + a0).focus(function() {
			if (this.value == this.defaultValue) this.value = '';
		}).blur(function() {
			if (this.value == '') {
				this.value = this.defaultValue;
				if ($(this).is('.' + a1)) $(this).removeClass(a1);
			}
		}).keypress(function() {
			if (!$(this).is('.' + a1)) $(this).addClass(a1);
		});
	}
	focusTxt(['txt-focus']);
});