require 'gui'
window = gui.create_window()
window.title = 'Nee klikker'

knop1 = window:add_button()
knop1.x = 50
knop1.y = 50
knop1.text = "Ja"

function knop1:on_click()
  knop1.text = "Nee"
  knop2.text = "Ja"
  end

knop2 = window:add_button()
knop2.x = 400
knop2.y = 50
knop2.text = "Nee"

function knop2:on_click()
  knop2.text = "Ja"
  knop4.text = "Ja"
  end

knop3 = window:add_button()
knop3.x = 50
knop3.y = 300
knop3.text = "Nee"

function knop3:on_click()
  knop2.text = "Nee"
  knop3.text = "Ja"
  knop4.text = "Nee"
  end

knop4 = window:add_button()
knop4.x = 400
knop4.y = 300
knop4.text = "Nee"

function knop4:on_click()
  knop1.text = "Ja"
  knop2.text = "Ja"
  knop4.text = "ja"
  end

knopreset= window:add_button()
knopreset.x = 250
knopreset.y = 150
knopreset.text = "Reset"

function knopreset:on_click()
  knop1.text= "Ja"
  knop2.text = "Nee"
  knop3.text = "Nee"
  knop4.text = "Nee"
end

print("Congratulations you have won the game!")
gui.run()