window.addEventListener("load", () => {
  const h_menu = document.querySelector("#wkode-header__megamenu-btn");
  const menu = document.querySelector(
    ".wkode-header--mobile .wkode-header__nav--bottom"
  );
  const mobile_header = document.querySelector("header.wkode-header--mobile");
  const body = document.querySelector("body");
  const mobile_header_close = document.getElementById('wkode-header-close');

  const toggleHeader = () => {
    menu.classList.toggle("wkode-header__nav--active");
    body.classList.toggle("body-megamenu-active");
  };

  h_menu.addEventListener("click", (event) => {
    event.preventDefault();

    toggleHeader();
  });

  mobile_header_close.addEventListener("click", (event) => {
    event.preventDefault();

    toggleHeader();
  });

  document.addEventListener("click", (event) => {
    if (
      !mobile_header.contains(event.target) &&
      body.classList.contains("body-megamenu-active")
    ) {
      toggleHeader();
    }
  });

  let mobile_menu_ul = document.querySelectorAll(
    ".wkode-header--mobile .wkode-header__nav--bottom .wkode-header__menu-container .nav .menu-item-has-children"
  );

  let mobile_mega_opener = document.querySelectorAll(
    ".wkode-header--mobile .wkode-header__nav--bottom > .wkode-header__menu-container > .nav > .menu-item-has-children"
  );

  for (let i = 0; i < mobile_menu_ul.length; i++) {
    let item = mobile_menu_ul[i];

    item.children[0].addEventListener("click", (e) => {
      e.preventDefault();
      openItem(item);
    });
  }

  for (let i = 0; i < mobile_mega_opener.length; i++) {
    let item = mobile_menu_ul[i];

    item.children[0].addEventListener("click", (e) => {
      e.preventDefault();
      openItem(item, true);
    });
  }

  function openItem(item, isFirstLevel = false) {
    if (isFirstLevel) {
      megamenuHasOpened()
        ? menu.classList.add("full")
        : menu.classList.remove("full");
    } else {
      item.classList.toggle("opened");
    }
  }
  //- Checks if the mobile megamenu has any first level navs opened
  function megamenuHasOpened() {
    let hasOpened = false;

    mobile_mega_opener.forEach((listItem) => {
      if (listItem.classList.contains("opened")) hasOpened = true;
    });

    return hasOpened;
  }
});
