/**
 * @var lx.Application App
 * @var lx.Plugin Plugin
 * @var lx.Snippet Snippet
 * */

#lx:use lx.Button;
#lx:use lx.LanguageSwitcher;

var height = '60px';

var head = new lx.Box({height});
head.gridProportional({indent: '10px', cols: 13});
head.addClass('core-header');

head.begin();
var lbl = new lx.Box({width: 2});
var cli = new lx.Button({width: 3, key: 'cli'});
var doc = new lx.Button({width: 3, key: 'doc'});
var demo = new lx.Button({width: 3, key: 'demo'});

new lx.LanguageSwitcher({width: 2});
head.end();

lbl.text(#lx:i18n(title));
lbl.align(lx.LEFT, lx.MIDDLE);

cli.text(#lx:i18n(cli));
doc.text(#lx:i18n(doc));
demo.text(#lx:i18n(demo));

var body = new lx.Box({top: height, key: 'work'});
var fon = body.add(lx.Box, {geom:true});
fon.slot({indent:'10px', cols:1, rows:1});
fon.child(0).picture('/web/lx/icon.png');
fon.child(0).opacity(0.3);
