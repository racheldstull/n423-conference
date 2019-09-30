var FIREBASE_MODEL = (function() {
    // you need to input code here

    function authStateObserver(user) {
        if(user){
            $('#signin-google').attr('hidden', true);
            $('#signout-google').removeAttr('hidden');
            $('.user-pic').removeAttr('hidden');
            $('.user-name').text(user.displayName);
            $('.user-pic').css('background-image', 'url(' + user.photoURL + ')');
        } else {
            console.log("no user signed in");

            $('#signout-google').attr('hidden', true);
            $('#signin-google').removeAttr('hidden');
            $('.user-pic').attr('hidden', true);
            $('.user-name').attr('hidden', true);
            $('.user-pic').text('');
        }
    }

    function initFirebaseAuth(){
        //listen to local auth state changes
        firebase.auth().onAuthStateChanged(authStateObserver);
    }

    var _signInWithGoogle = function(){
        let provider = new firebase.auth.GoogleAuthProvider();
        firebase.auth().signInWithPopup(provider);
    };

    var _createAccount =  function(email, pw, fName, lName){
        firebase
            .auth()
            .createUserWithEmailAndPassword(email, pw)
            .catch(function(error) {
                // Handle Errors here.
                var errorCode = error.code;
                var errorMessage = error.message;
                console.log(errorCode + ' ' + errorMessage)
            })
            .then(function(res){
                return firebase
                    .firestore()
                    .collection('users')
                    .add({
                        displayName: fName + ' ' + lName,
                        email: email,
                        timestamp: firebase.firestore.FieldValue.serverTimestamp()
                    })
                    .catch(function(error){
                        console.error(
                            'Error writing new messages to database',
                            error
                        );
                    })
            });
    };

    var _signInWithEP =  function(email, pw) {
        firebase
            .auth()
            .signInWithEmailAndPassword(email, pw)
            .catch(function(error) {
                // Handle Errors here.
                var errorCode = error.code;
                var errorMessage = error.message;
                console.log(errorCode + ' ' + errorMessage)
            })
            .then(function(res){
                console.log(res);
            });
    };

    var _signOut = function(){
        firebase.auth().signOut();
    };

    var _realtimeUpdates = function () {
        return firebase
            .firestore()
            .collection('users')
            .doc("IfrJ2Zn1dGqYqFQu6SGj")
            .onSnapshot(function (doc) {
                console.log("Current data: ", doc.data());
            })
            .catch(function (error) {
                console.error(
                    'Error writing new messages to database',
                    error
                );
            })
    };

    initFirebaseAuth();

    return {
        //   return functions here
        signInWithGoogle: _signInWithGoogle,
        signOut: _signOut,
        createAccount: _createAccount,
        signInWithEP: _signInWithEP,
        realtimeUpdates: _realtimeUpdates
    };
})();
