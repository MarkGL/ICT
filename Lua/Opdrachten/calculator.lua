require 'gui'

local window = gui.create_window()
window.title = "Text Box Demo"

local text_label = window:add_label()
text_label.x = 5
text_label.y = 8
text_label.text = "Eerste getal:"

local text_label = window:add_label()
text_label.x = 5
text_label.y = 45
text_label.text = "Tweede getal:"

local text_label = window:add_label()
text_label.x = 5
text_label.y = 98
text_label.text = "Totaal getal:"

local text_box = window:add_text_box()
text_box.x = 100
text_box.y = 8
text_box.width = 150

local text_box = window:add_text_box()
text_box.x = 100
text_box.y = 45
text_box.width = 150

local text_box = window:add_text_box()
text_box.x = 100
text_box.y = 98
text_box.width = 150

Optellen = window:add_button()
Optellen.x = 50
Optellen.y = 150
Optellen.text = "Optellen"

Aftrekken = window:add_button()
Aftrekken.x = 150
Aftrekken.y = 150
Aftrekken.text = "Aftrekken"

Delen = window:add_button()
Delen.x = 250
Delen.y = 150
Delen.text = "Delen"

Keer = window:add_button()
Keer.x = 350
Keer.y = 150
Keer.text = "Keer"

Reset = window:add_button()
Reset.x = 50
Reset.y = 300
Reset.text = "Reset"



gui.run()