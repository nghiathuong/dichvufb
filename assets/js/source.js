const Style = {
    base: [
        "color: #fff",
        "background-color: #444",
        "padding: 2px 4px",
        "border-radius: 2px"
    ],
    warning: [
        "color: #eee",
        "background-color: red",
        "font-weight: bold",
        "border-radius: 2px",
        "font-size: 30px"
    ],
    success: [
        "background-color: green",
        "color: #eee",
        "padding: 2px 4px",
        "border-radius: 2px",
        "font-size: 30px"
    ]
}
const log = (text, extra = []) => {
    let style = Style.base.join(';') + ';';
    style += extra.join(';');
    console.log(`%c${text}`, style);
}
log("Trang web được vận hành bởi Lương Bình Dương", Style.warning);
log("Liên hệ facebok: https://fb.com/luongbinhduong.mOzil", Style.success);
