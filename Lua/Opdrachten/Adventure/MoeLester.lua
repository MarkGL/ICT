require "gui"


window = gui.create_window()
window.title = "Adventure"
window.width = 900
window.height = 500
window.x = 10
window.y = 10

  button1 = window:add_button()
  button1.x = 10
  button1.y = 90
  button1.width = 150

  button2 = window:add_button()
  button2.x = 10
  button2.y = 130
  button2.width = 150
  
   label1 = window:add_label(text)
  label1.x = 5
  label1.y = 10
  
   Image1 = window:add_image()
  Image1.x = button1.width + 40
  Image1.y = 10
  Image1.width = 700
  Image1.height = 400
  



function button1:on_click()
 if level == 2 then
   level1()
 elseif level == 1 then
   level2()
 elseif level == 3 then
   level4()
 elseif level == 4 then
   level3()
 elseif level == 5 then 
   level7()
 elseif level == 7 then
   level5()
 elseif level == 6 then
   level8()
 elseif level == 8 then
   level9()
 elseif level == 9 then
   level6()
 elseif level == 10 then
   level11()
 elseif level == 12 then
   window:close()
 elseif level == 11 then
   level12()
end
end

   
function level1()
 level = 1
  button2.x = 10
 button1.text = "1) Vang een vissenkus."
  button2.text = "2) Uitbreken."
  label1.text = "Je bent Moe Lester.\nJe zit in de gevangenis omdat je een fedopiel op hoofd niveue bent.\nDe bewaker komt er aan.\nAls je Uitbreekt moet je eer een vissenkus hebben anders kan het niet."
  Image1.file_name = "Opdrachten/Adventure/images/moe.jpg"
end

level1()

function level2()
  level = 2
  button2.x = -1000
  button1.text = "Ga terug!"
  label1.text = "De vis geeft je een kus, ren nu maar terug."
  Image1.file_name = "Opdrachten/Adventure/images/vis.jpg"
  kus = true
end

function button2:on_click()
  print(level)
  if level == 1 then
    level3()
  elseif level == 2 then
    level3()
  elseif level == 4 then
    window:close()
  elseif level == 3 then
    level5()
  elseif level == 5 then
    level6()
  elseif level == 8 then
    level6()
  elseif level == 6 then
    level10()
  elseif level == 10 then
    level6()
  elseif level == 11 then
    level10()
  end
  
end



function level3()
  if kus == true then
  level = 3
  button1.text = "zelfmoord!"
  button2.text = "Survival"
  label1.text = "Je bent in het vissen univue, succes"
  Image1.file_name = "Opdrachten/Adventure/images/vis2.jpg"
else
  print("Neee vang een vissenkus ga terug")
  end
end

function level4()
  level = 4
  button1.text = "De tijd terug draaien!"
  button2.text = "Accepteer je dood."
  label1.text = "Er valt een luiaard op je hoofd!\nWat kies je?!?"
  Image1.file_name = "Opdrachten/Adventure/images/dood.jpg"
end

function level5()
  level = 5
  button2.x = 10
  button1.text = "Vraag of ze worst lust."
  button2.text = "Flash."
  label1.text = "Je komt een kind tegen van 2 jaar, wat doe je?"
  Image1.file_name = "Opdrachten/Adventure/images/boswachter.jpg"
end

function level6()
  level = 6
  button2.x = 10
  button1.text = "Ga naar de speeltuin"
  button2.text = "Ga naar het kinderdagverblijf."
  label1.text = "Het is gebeurd, ze ziet je hema worst.\n"
  Image1.file_name = "Opdrachten/Adventure/images/flash.jpg"
end

function level7()
  level = 7
  button1.text = "Gebruik je Tijdmachine."
  button2.x = -1000
  label1.text = "Kinderen lusten nooit worst, ga terug."
  Image1.file_name = "Opdrachten/Adventure/images/hema.jpg"
end

function level8()
  level = 8
  button1.text = "Terug slaan."
  button2.text = "Terug rennen."
  label1.text = "De kinderen worden bang van je.\nZe willen je slaan.\nWat doe je?"
  Image1.file_name = "Opdrachten/Adventure/images/bang.jpg"
end

function level9()
  level = 9
  button1.text = "Weg rennen"
  button2.x = -1000
  label1.text = "Goedzo."
  Image1.file_name = "Opdrachten/Adventure/images/slaan.jpg"
end

function level10()
  level = 10
  button1.text = "Geef jezelf aan bij de politie."
  button2.text = "Flash"
  label1.text = "Dit is een bejaardetehuis!.\nZe geven je een vliegtuig.\n Wat doe je?"
  Image1.file_name = "Opdrachten/Adventure/images/vliegtuig.jpg"
end

function level11()
  level = 11
  button1.text = "Fietsen"
  button2.text = "Terug gaan."
  label1.text = "Pak je fiets"
  Image1.file_name = "Opdrachten/Adventure/images/fiets.jpg"
end

function level12()
  level = 12
  button1.text = "Einde"
  button2.x = -1000
  label1.text = "Je valt van je fiets, dit is het einde van Moe Lester."
  Image1.file_name = "Opdrachten/Adventure/images/vallen.jpg"
end
gui.run()