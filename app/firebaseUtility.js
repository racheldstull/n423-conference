var FIREBASE_UTILITY = (function(){
    var config = {
        apiKey: "AIzaSyCKd5rTZJ5cLM7EMUpU1PjJsyDYPlakR20",
        authDomain: "n423-conference.firebaseapp.com",
        databaseURL: "https://n423-conference.firebaseio.com/",
        projectId: "n423-conference-5ee60",
        storageBucket: "n423-conference.appspot.com",
        messagingSenderId: "270759927272"
    };
    firebase.initializeApp(config);

// this is used to write the recipe information to the database.
    var _writeData = function(name, email, subject, message, time) {
        var newmessageKey = firebase
            .database()
            .ref()
            .child('messages')
            .push().key;
        firebase
            .database()
            .ref('messages/' + newmessageKey)
            .set({
                name: name,
                email: email,
                subject: subject,
                message: message,
                time: time
            });
    };

// this will get all the data in the database once
    var _getAllMessages = function (callback) {
        firebase
            .database()
            .ref('messages/')
            .once('value')
            .then(function(snapshot) {
                console.log(snapshot.val());
                var messageArray = snapshot.val();
                return callback(messageArray)
            });
    };

// this will delete a recipe. You will need the key reference
    var _deleteMessage = function (messageKey) {
        firebase
            .database()
            .ref(`messages/${messageKey}`)
            .remove();
    };

// function used to update a recipe
    var _updateMessage =  function(messageKey, editObj){
        firebase
            .database()
            .ref(`messages/${messageKey}`)
            .update(editObj);
    };

    return {
        // storageRef: _storageRef,
        writeData: _writeData,
        deleteMessages: _deleteMessage,
        updateMessages: _updateMessage,
        getAllMessages: _getAllMessages
    };
})();
