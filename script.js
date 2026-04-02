$(document).ready(function() {

    // ================= GLOBAL: THEME TOGGLE =================
    $("#themeToggle").click(function() {
        $("body").toggleClass("dark");
        const isDark = $("body").hasClass("dark");
        $(this).text(isDark ? "☀️" : "🌙");
    });

    // ================= SELECTORS PAGE (selectors.html) =================
    
    // Basic Selectors
    $("#btn-elem").click(function() { $("p").addClass("highlight"); });
    $("#btn-id").click(function() { $("#para1").addClass("highlight"); });
    $("#btn-class").click(function() { $(".item-cls").addClass("highlight"); });
    $("#btn-multiple").click(function() { $("h1, #para1").addClass("highlight"); });
    $("#btn-reset-basic").click(function() { $("#basic-selectors *").removeClass("highlight"); });

    // Hierarchy Selectors
    $("#btn-space").click(function() { $("#parent-box p").addClass("highlight"); });
    $("#btn-greater").click(function() { $("#parent-box > p").addClass("highlight"); });
    $("#btn-plus").click(function() { $("#child1 + div").addClass("highlight"); });
    $("#btn-tilde").click(function() { $("#child1 ~ div").addClass("highlight"); });
    $("#btn-reset-hierarchy").click(function() { $("#hierarchy-selectors *").removeClass("highlight"); });

    // Filter Selectors
    $("#btn-first").click(function() { $("#filter-list li:first").addClass("highlight"); });
    $("#btn-last").click(function() { $("#filter-list li:last").addClass("highlight"); });
    $("#btn-eq").click(function() { $("#filter-list li:eq(2)").addClass("highlight"); });
    $("#btn-even").click(function() { $("#filter-list li:even").addClass("highlight"); });
    $("#btn-odd").click(function() { $("#filter-list li:odd").addClass("highlight"); });
    $("#btn-not").click(function() { $("#filter-list li:not(#special-li)").addClass("highlight"); });
    $("#btn-reset-filter").click(function() { $("#filter-list li").removeClass("highlight"); });

    // Attribute Selectors
    $("#btn-has-attr").click(function() { $("#attr-demo-box input[name]").addClass("highlight"); });
    $("#btn-attr-val").click(function() { $("#attr-demo-box input[name='user-name']").addClass("highlight"); });
    $("#btn-attr-start").click(function() { $("#attr-demo-box input[name^='user']").addClass("highlight"); });
    $("#btn-attr-end").click(function() { $("#attr-demo-box input[name$='email']").addClass("highlight"); });
    $("#btn-attr-contain").click(function() { $("#attr-demo-box input[name*='title']").addClass("highlight"); });
    $("#btn-reset-attr").click(function() { $("#attr-demo-box *").removeClass("highlight"); });


    // ================= ATTRIBUTES PAGE (attributes.html) =================
    
    // attr() & removeAttr()
    $("#btn-change-src").click(function() { 
        $("#demo-img").attr("src", "https://picsum.photos/id/10/200/200"); 
    });
    $("#btn-remove-alt").click(function() { 
        $("#demo-img").removeAttr("alt"); 
        alert("Alt attribute removed.");
    });
    $("#btn-get-attr").click(function() { 
        alert("Current SRC: " + $("#demo-img").attr("src")); 
    });

    // prop()
    $("#btn-check").click(function() { $("#accept-terms").prop("checked", true); });
    $("#btn-uncheck").click(function() { $("#accept-terms").prop("checked", false); });
    $("#btn-toggle-check").click(function() { 
        $("#accept-terms").prop("checked", !$("#accept-terms").prop("checked")); 
    });
    $("#btn-is-checked").click(function() { 
        alert("Is Checked? " + $("#accept-terms").prop("checked")); 
    });

    // val()
    $("#btn-get-val").click(function() { alert("Value: " + $("#user-input").val()); });
    $("#btn-set-val").click(function() { $("#user-input").val("Updated via jQuery!"); });
    $("#btn-clear-val").click(function() { $("#user-input").val(""); });


    // ================= EVENTS PAGE (events.html) =================
    
    // Mouse Events
    $("#event-box").click(function() { $("#event-log").text("Event: Clicked"); });
    $("#event-box").dblclick(function() { $("#event-log").text("Event: Double Clicked"); });
    $("#event-box").mouseenter(function() { 
        $("#event-log").text("Event: Mouse Entered");
        $(this).css("background", "#4f46e5");
    });
    $("#event-box").mouseleave(function() { 
        $("#event-log").text("Event: Mouse Left");
        $(this).css("background", "#6366f1");
    });
    $("#event-box").mousedown(function() { $("#event-log").text("Event: Mouse Down"); });
    $("#event-box").mouseup(function() { $("#event-log").text("Event: Mouse Up"); });

    // on() and off()
    $("#btn-on").click(function() {
        $("#event-box").on("contextmenu", function(e) {
            e.preventDefault();
            alert("Custom Right-Click Event Activated!");
        });
        alert("Right-click event enabled for the box.");
    });
    $("#btn-off").click(function() {
        $("#event-box").off("contextmenu");
        alert("Right-click event disabled.");
    });

    // Keyboard Events
    $("#keyboard-input").keyup(function(e) {
        $("#typed-val").text($(this).val());
        $("#last-key").text(e.key);
    });

    // Form Events
    $("#name-field").focus(function() { $(this).css("border-color", "var(--primary)"); });
    $("#name-field").blur(function() { $(this).css("border-color", "#ccc"); });
    $("#country-select").change(function() { $("#form-log").text("Status: Selected " + $(this).val()); });
    $("#sample-form").submit(function(e) {
        e.preventDefault();
        $("#form-log").text("Status: Form Submitted Successfully!");
    });


    // ================= STYLE PAGE (style.html) =================
    
    // css()
    $("#btn-red").click(function() { $("#style-box").css("color", "red"); });
    $("#btn-blue").click(function() { $("#style-box").css("color", "blue"); });
    $("#btn-rounded").click(function() { $("#style-box").css("border-radius", "50%"); });
    $("#btn-reset-style").click(function() { 
        $("#style-box").css({ "color": "white", "border-radius": "12px" }); 
    });

    // Class Methods
    $("#btn-add-class").click(function() { $("#class-text").addClass("highlight"); });
    $("#btn-remove-class").click(function() { $("#class-text").removeClass("highlight"); });
    $("#btn-toggle-class").click(function() { $("#class-text").toggleClass("highlight"); });
    $("#btn-has-class").click(function() { alert("Has highlight? " + $("#class-text").hasClass("highlight")); });


    // ================= TRAVERSING PAGE (traversing.html) =================
    
    // Parent Traversal
    $("#btn-parent").click(function() { 
        $("#traversing.html").find(".active-traverse").removeClass("active-traverse");
        $("#target-span").parent().addClass("active-traverse"); 
    });
    $("#btn-parents").click(function() { 
        $("#target-span").parents().addClass("active-traverse"); 
    });
    $("#btn-parentsUntil").click(function() { 
        $("#target-span").parentsUntil("#grandparent").addClass("active-traverse"); 
    });
    $("#btn-reset-parents").click(function() { $("#parent-traversal *").removeClass("active-traverse"); });

    // Children & Sibling Traversal
    $("#btn-children").click(function() { $("#sibling-container").children().addClass("active-traverse"); });
    $("#btn-find").click(function() { $("#sibling-container").find("p").addClass("active-traverse"); });
    $("#btn-siblings").click(function() { $("#p-target").siblings().addClass("active-traverse"); });
    $("#btn-next").click(function() { $("#p-target").next().addClass("active-traverse"); });
    $("#btn-nextAll").click(function() { $("#p-target").nextAll().addClass("active-traverse"); });
    $("#btn-nextUntil").click(function() { $("#p-target").nextUntil("#p-last").addClass("active-traverse"); });
    $("#btn-prev").click(function() { $("#p-target").prev().addClass("active-traverse"); });
    $("#btn-prevAll").click(function() { $("#p-target").prevAll().addClass("active-traverse"); });
    $("#btn-prevUntil").click(function() { $("#p-target").prevUntil("#p-first").addClass("active-traverse"); });
    $("#btn-reset-siblings").click(function() { $("#sibling-container *").removeClass("active-traverse"); });

    // Filtering
    $("#btn-first-fil").click(function() { $(".test-div").first().addClass("active-traverse"); });
    $("#btn-last-fil").click(function() { $(".test-div").last().addClass("active-traverse"); });
    $("#btn-eq-fil").click(function() { $(".test-div").eq(1).addClass("active-traverse"); });
    $("#btn-filter").click(function() { $(".test-div").filter(".special").addClass("active-traverse"); });
    $("#btn-not-fil").click(function() { $(".test-div").not(".special").addClass("active-traverse"); });
    $("#btn-reset-filter").click(function() { $(".test-div").removeClass("active-traverse"); });


    // ================= EFFECTS PAGE (effects.html) =================
    
    // Basic Effects
    $("#btn-hide").click(function() { $("#basic-box").hide(500); });
    $("#btn-show").click(function() { $("#basic-box").show(500); });
    $("#btn-toggle").click(function() { $("#basic-box").toggle(500); });

    // Fade Effects
    $("#btn-fadeIn").click(function() { $("#fade-box").fadeIn(1000); });
    $("#btn-fadeOut").click(function() { $("#fade-box").fadeOut(1000); });
    $("#btn-fadeToggle").click(function() { $("#fade-box").fadeToggle(1000); });
    $("#btn-fadeTo").click(function() { $("#fade-box").fadeTo(1000, 0.4); });

    // Sliding Effects
    $("#btn-slideDown").click(function() { $("#slide-box").slideDown(1000); });
    $("#btn-slideUp").click(function() { $("#slide-box").slideUp(1000); });
    $("#btn-slideToggle").click(function() { $("#slide-box").slideToggle(1000); });

    // Custom Animation & Control
    $("#btn-animate").click(function() {
        $("#animate-box")
            .animate({ left: '250px', opacity: '0.5', height: '150px', width: '150px' }, 2000)
            .animate({ top: '100px', left: '0px', opacity: '1', height: '100px', width: '100px' }, 2000)
            .animate({ top: '0px' }, 1000);
    });
    $("#btn-stop").click(function() { $("#animate-box").stop(); });
    $("#btn-finish").click(function() { $("#animate-box").finish(); });
    $("#btn-delay").click(function() { $("#animate-box").delay(2000).fadeOut(1000); });
    $("#btn-queue").click(function() { 
        alert("Queue length: " + $("#animate-box").queue().length); 
    });
    $("#btn-clearQueue").click(function() { 
        $("#animate-box").clearQueue(); 
        alert("Queue cleared.");
    });

});