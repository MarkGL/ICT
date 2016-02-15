require 'gui'

local window = gui.create_window()
window.title = "Calculator 2.0"

local text_box = window:add_text_box()
text_box.x = 10
text_box.y = 10
text_box.width = 230
text_box.text = "0"

zeven = window:add_button()
zeven.x = 10
zeven.y = 50
zeven.height = 50
zeven.width = 50
zeven.text = "7"

acht = window:add_button()
acht.x = 70
acht.y = 50
acht.height = 50
acht.width = 50
acht.text = "8"
 
negen = window:add_button()
negen.x = 130
negen.y = 50
negen.height = 50
negen.width = 50
negen.text = "9"

plus = window:add_button()
plus.x = 190
plus.y = 50
plus.height = 50
plus.width = 50
plus.text = "+"

vier = window:add_button()
vier.x = 10
vier.y = 120
vier.height = 50
vier.width = 50
vier.text = "4"

vijf = window:add_button()
vijf.x = 70
vijf.y = 120
vijf.height = 50
vijf.width = 50
vijf.text = "5"

zes = window:add_button()
zes.x = 130
zes.y = 120
zes.height = 50
zes.width = 50
zes.text = "6"

min = window:add_button()
min.x = 190
min.y = 120
min.height = 50
min.width = 50
min.text = "-"

een = window:add_button()
een.x = 10
een.y = 190
een.height = 50
een.width = 50
een.text = "1"

twee = window:add_button()
twee.x = 70
twee.y = 190
twee.height = 50
twee.width = 50
twee.text = "2"

drie = window:add_button()
drie.x = 130
drie.y = 190
drie.height = 50
drie.width = 50
drie.text = "3"

keer = window:add_button()
keer.x = 190
keer.y = 190
keer.height = 50
keer.width = 50
keer.text = "x"

clear = window:add_button()
clear.x = 10
clear.y = 260
clear.height = 50
clear.width = 50
clear.text = "c"

nul = window:add_button()
nul.x = 70
nul.y = 260
nul.height = 50
nul.width = 50
nul.text = "0"

is = window:add_button()
is.x = 130
is.y = 260
is.height = 50
is.width = 50
is.text = "="

delen = window:add_button()
delen.x = 190
delen.y = 260
delen.height = 50
delen.width = 50
delen.text = "/"
function nul:on_click()
  text_box.text = (tonumber(text_box.text) * 10) + 0
end
function een:on_click()
  text_box.text = (tonumber(text_box.text) * 10) + 1
end
function twee:on_click()
  text_box.text = (tonumber(text_box.text) * 10) + 2
end
function drie:on_click()
  text_box.text = (tonumber(text_box.text) * 10) + 3
end
function vier:on_click()
  text_box.text = (tonumber(text_box.text) * 10) + 4
end
function vijf:on_click()
  text_box.text = (tonumber(text_box.text) * 10) + 5
end
function zes:on_click()
  text_box.text = (tonumber(text_box.text) * 10) + 6
end
function zeven:on_click()
  text_box.text = (tonumber(text_box.text) * 10) + 7
end
function acht:on_click()
  text_box.text = (tonumber(text_box.text) * 10) + 8
end
function negen:on_click()
  text_box.text = (tonumber(text_box.text) * 10) + 9
end
function plus:on_click()
  x = "+"
  eerstegetal = text_box.text
  text_box.text = "0"
end
function min:on_click()
  x = "-"
  eerstegetal = text_box.text
  text_box.text = "0"
end
function delen:on_click()
   x = ":"
  eerstegetal = text_box.text
  text_box.text = "0"
 end
 function keer:on_click()
   x = "x"
  eerstegetal = text_box.text
  text_box.text = "0"
 end
function clear:on_click()
  text_box.text = "0"
end
function is:on_click()
  if x == "+" then
    text_box.text= text_box.text + eerstegetal
  end
  if x == "-" then
    text_box.text= eerstegetal - text_box.text
  end
  if x == ":" then
    text_box.text= eerstegetal / text_box.text
  end
  if x == "x" then
    text_box.text=  eerstegetal * text_box.text
  end
  end
gui.run()