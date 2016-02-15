require 'robot_arm'
robot_arm: random_level(1)
robot_arm.speed = 0.99
aantal = 1
color = 1
for i = 1, 9 do
robot_arm:grab()
color = robot_arm:scan()
print(color)
while color == 1 do
  for u = 1, aantal do
  robot_arm:move_right()
  end
  robot_arm:drop()
  for u = 1, 10 do
  robot_arm:move_left()
  end
aantal = aantal + 1
else
color = 2
end
end