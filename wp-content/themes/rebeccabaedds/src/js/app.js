import global from "./global";
import OurTech from "./controller/our_technology";
import ourServices from "./controller/our_services";
import memberShip from "./controller/membership";
import gallery from "./controller/gallery"
import home from "./controller/home";

const controllers = {
  our_technology: OurTech,
  our_services: ourServices,
  membership: memberShip,
  smile_gallery:gallery,
  home: home,
};
const _find = (_class, _str) => {
  if (_class.length > 0) {
    let _array = null;
    for (let i = 0; i < _class.length; i++) {
      var n = _class[i].indexOf(_str);
      if (n > 0) {
        _array = _class[i].replace("_" + _str, "");
        break;
      }
    }
    return _array;
  } else {
    return null;
  }
};

const router = () => {
  const _class = document.body.className.replace(/-/g, "_").split(/\s+/);
  const controller = _find(_class, "ph");
  new global();
  if (controller !== null) {
    if (controllers[controller]) {
      new controllers[controller]();
    }
  }
};
router();
