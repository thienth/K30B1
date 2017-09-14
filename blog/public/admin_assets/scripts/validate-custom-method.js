var responseExisted = false;
var responseDateRange = false;
var responseRequiredGallery = false;
var validateMsg = "";
jQuery.validator.addMethod("checkUrl", function(value, element, params) {
    $.ajax({
        url: value,
        type: 'POST',
        data: {
            _token: params[0],
            entityType: params[1],
            entityId: params[2],
            slug: element.value
        },
        dataType: 'JSON',
        async: false,
        success: function(rp){
            responseExisted = rp;
        }
    });

    return responseExisted;

}, "Slug đã bị trùng, vui lòng chọn đường dẫn khác!");
jQuery.validator.addMethod("checkExistedUrl", function(value, element, params) {
    params.value = value;
    $.ajax({
        url: params.url,
        type: 'POST',
        data: params,
        dataType: 'JSON',
        async: false,
        success: function(rp){
            responseExisted = rp;
        }
    });

    return responseExisted;

}, "Giá trị đã tồn tại, nhập giá trị khác");

jQuery.validator.addMethod("requiredGallery", function(value, element, params) {
    var requiredNumber = params == undefined ? 1 : parseInt(params);

    var textIp = $('#gallery-table').find('input[type=text]');
    if(textIp.length >= requiredNumber){
        responseRequiredGallery = true;
    }
    return responseRequiredGallery;

}, "Vui lòng chọn ít nhất 1 ảnh");

jQuery.validator.addMethod("compareDateRange", function(value, element, params) {
    var startDate = moment(value, "YYYY-MM-DD");
    var endDate = moment($('#' + params).val(), "YYYY-MM-DD");
    return startDate < endDate;

}, "Ngày bắt đầu phải nhỏ hơn ngày kết thúc");
