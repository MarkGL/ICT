require 'robot_arm'
robot_arm:load_level('exercise 9')
robot_arm.speed = 0.95
plek = 5
hoogte = 1
for stapel = 1, 4 do
  for t = 1, hoogte do
    robot_arm:grab()
    for i = 1, plek do
      robot_arm:move_right()
    end
    robot_arm:drop()
    for o = 1, plek do
      robot_arm:move_left()
    end
  end
  robot_arm:move_right()
  hoogte = hoogte + 1
end