require 'slack-ruby-client'
require 'net/http'
require 'uri'
require 'json'

Slack.configure do |config|
  config.token = 'xoxb-394364923254-412989660289-IlW1WFwgCgBPG5qxKmjxZude'
  config.logger = Logger.new(STDOUT)
  config.logger.level = Logger::INFO
  raise 'Missing ENV[SLACK_API_TOKEN]!' unless config.token
end

# Process Slack IN-OUT message
def process(data)
  if data.text == 'IN' or data.text == 'in'
    puts "<@#{data.user}> IN at #{data.ts}"
    puts Time.at(DateTime.now.to_i)
  elsif data.text == 'OUT' or data.text == 'out'
    puts "<@#{data.user}> OUT at #{data.ts}"
    puts Time.at(DateTime.now.to_i)
  end
  
  # please change URI using your API
  uri = URI.parse("http://localhost/ayoabsen/api/slack.php")

  header = {'Content-Type': 'text/json'}
  user = {user: {
                    slack_id: data.user,
                    timestamp: Time.at(DateTime.now.to_i),
                    message: data.text
                }
         }

  # Create the HTTP objects
  http = Net::HTTP.new(uri.host, uri.port)
  request = Net::HTTP::Post.new(uri.request_uri, header)
  request.body = user.to_json

  # Send the request
  response = http.request(request)
  puts response.body
end

client = Slack::RealTime::Client.new

client.on :hello do
  puts "Successfully connected, welcome '#{client.self.name}' to the '#{client.team.name}' team at https://#{client.team.domain}.slack.com."
 end

client.on :message do |data|
  puts data

  client.typing channel: data.channel

  case data.text
  when 'bot hi' then
    client.message channel: data.channel, text: "Hi <@#{data.user}>!"
  when /^bot/ then
    client.message channel: data.channel, text: "Sorry <@#{data.user}>, what?"
  else
    process(data)
  end
end

client.on :close do |_data|
  puts 'Connection closing, exiting.'
end

client.on :closed do |_data|
  puts 'Connection has been disconnected.'
end

client.start!
