math.randomseed(os.time())
number = math.random(0, 10)
found = false
while found == false do
  print('Wat is het getal?')
  answer = tonumber(io.read())
  if answer == number then
    print('goedzo')
    found = true
  else
  print('Nee probeer het nog eens, dit klopt niet')
  end
end