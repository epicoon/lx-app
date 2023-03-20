#lx:use lx.ActiveBox;
#lx:use lx.WebCli;

class Plugin extends lx.Plugin {
    initCss(css) {
        css.addClass('core-header', {
            backgroundColor: css.preset.altMainBackgroundColor
        });
        css.addClass('core-activeBut', {
            backgroundColor: css.preset.checkedMainColor
        });
    }

    run() {
        const body = this->>work;
        const list = new lx.Dict({
            cli: {
                box: null,
                title: 'CLI'
            },
            doc: {
                box: null,
                title: 'Documentation',
                service: 'lx/doc'
            }
        });
        const buts = [ this->>cli, this->>doc  ];

        list.forEach((item, key)=>{
            let but = this.find(key);
            but.click(()=>{
                buts.forEach(a=>a.removeClass('core-activeBut'));
                but.addClass('core-activeBut');

                if (item.box) {
                    item.box.emerge();
                    return;
                }
                if (key == 'cli') {
                    item.box = new lx.ActiveBox({ parent: body, header: item.title, geom:true });
                    new lx.WebCli(item.box->body);
                } else {
                    ^Resp.loadPlugin(key).then(res=>__loadPlugin(list, item.service, item.title, key, res));
                }
            });
        });
    }
}

function __loadPlugin(list, name, title, boxName, data) {
    if (data.success === false) {
        lx.tostWarning('Application need service "'+ name +'"');
        return;
    }

    list[boxName].box = new lx.ActiveBox({ parent: lx.body, header: title, geom:true });
    var elem = list[boxName].box;
    elem->body.setPlugin(data.data);
    elem->body.style('overflow', 'auto');
}
