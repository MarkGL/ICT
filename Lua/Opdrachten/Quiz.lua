print("Hoe heet je?")
Name = io.read()
print("Hallo " ..  Name)
if Name == "Arnold" then
  print("Je bent een toffe kerel")
elseif Name == "Mark" then
  print("Lang ni gesproke man!")
else
  print("Jou ken ik nog niet :o")
end
print("Hoe oud ben je nou ook alweer?")
Age = tonumber(io.read())
if Age == nil then
  print("mot je wel een getal zette he kut")
  end
if Age < 18 then
  print(Age .. " dan mag je nog geen biertje hale he")
  else
  print("Nice ff bierhalen tochh")
end