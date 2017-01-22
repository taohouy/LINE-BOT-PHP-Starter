curl -X POST -H "Content-Type: application/json" -d '{
  "recipient": {
    "id": "100001907613482"
  },
  "message": {
    "text": "hello, world!"
  }
}' "https://graph.facebook.com/v2.6/me/messages?access_token=EAAFiLqqrKJcBAJXQ4tK4Np2ZAcU3JrLo1CODI34r9ze5I3KNwzsJCGOeA6fpJL6gTXRhdjBgn5AehrMW4tKWFpkPSx05cZBcwcLySLv0z1kGx3ubR5ehZAlsmuzRK6QuwHddVYPky9LgqeFsphCOz300UUwO6wd3jeTyPOPXwZDZD"
